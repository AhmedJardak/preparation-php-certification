<?php
/**
 * preparation-php-certification
 * User: user
 * Date: 18/06/13
 * Time: 20:27
 */

namespace org\home\xml;


use SimpleXMLElement;

class SimpleXml
{


    function __construct()
    {
        // Load an XML string
        $xmlstr = file_get_contents('library.xml');
        $library = new SimpleXMLElement($xmlstr);
        // Load an XML file
        $library = new SimpleXMLElement('library.xml', NULL, true);
//        foreach ($library->book as $book)
//        {
//            echo $book['isbn'] . "\n";
//            echo $book->title . "\n";
//            echo $book->author . "\n";
//           echo $book->publisher . "\n\n";
//        }

//        foreach ($library->children() as $child)
//        {
//            echo $child->getName() . ":\n";
//// Get attributes of this element
//            foreach ($child->attributes() as $attr)
//            {
//                echo ' ' . $attr->getName() . ': ' . $attr . "\n";
//}
//// Get children
//            foreach ($child->children() as $subchild)
//            {
//                echo ' ' . $subchild->getName() . ': ' . $subchild . "\n";
//}
//            echo "\n";
//        }

        // Search the root element
        $results = $library->xpath('/library/book/title');
        foreach ($results as $title) {
            echo $title . "\n";
        }
// Search the first child element
        $results = $library->book[0]->xpath('title');
        foreach ($results as $title) {
            echo $title . "\n";
        }
    }
}

new SimpleXml();