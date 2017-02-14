<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
require 'vendor/autoload.php';
use AntoineAugusti\Books\Fetcher;
use GuzzleHttp\Client;
$client = new Client(['base_uri' => "https://www.googleapis.com/books/v1/volumes?q=isbn:"]);
  $fetcher = new Fetcher($client);
  $book = $fetcher->forISBN($argv[1]);
  echo "Tiltle :- ".$book->title."\xA";
  echo "Authors :- ".$book->authors[0]."\xA";
  echo "Publisher :- ".$book->publisher."\xA";
  echo "Categories :- ".$book->categories[0]."\xA";
  echo "Rating :- ".$book->averageRating."\xA";
  echo "PageCount :- ".$book->pageCount."\xA";
  echo "Language :- ".$book->language."\xA";
  $date=$book->publishedDate;
  echo "PublishedDate :- ".date_format($date, 'Y-m-d H:i:s')."\xA";
?>
