<?php
declare(strict_types=1);

namespace App\Actions;

use App\QueryBuilders\OfferQueryBuilder;
use App\SubActions\DataHandlingSubAction;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserAction
{
    public function __construct(
        public OfferQueryBuilder $query,
        public DataHandlingSubAction $data_handle_sub_action,
    ) {
    }

    public function execute(string $file_path): void
    {
        if (!file_exists($file_path)) {
            print_r('Error: file not found' . PHP_EOL);
            return ;
        }

        $xml = XMLParser::load($file_path);

        $xml_data = $xml->getContent();

        $current_ids = [];

        foreach ($xml_data->offers->offer as $item)
        {
            $current_ids[] = (int) $item->id;
            $this->data_handle_sub_action->execute($item);
        }

        $offers = $this->query->get();

        foreach ($offers as $offer) {
            if (!in_array($offer->offer_id, $current_ids)) {
                $offer->delete();
            }
        }
    }
}
