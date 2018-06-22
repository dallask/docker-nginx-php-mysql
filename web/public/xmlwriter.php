<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 22-Jun-18
 * Time: 11:32
 */

/*
 * Процедурный подход
 */
$xw = xmlwriter_open_memory();
xmlwriter_set_indent($xw, 1);
$res = xmlwriter_set_indent_string($xw, ' ');

xmlwriter_start_document($xw, '1.0', 'UTF-8');

// Первый элемент
xmlwriter_start_element($xw, 'tag1');

// Атрибут 'att1' для элемента 'tag1'
xmlwriter_start_attribute($xw, 'att1');
xmlwriter_text($xw, 'valueofatt1');
xmlwriter_end_attribute($xw);

xmlwriter_write_comment($xw, 'this is a comment.');

// Создаем дочерний элемент
xmlwriter_start_element($xw, 'tag11');
xmlwriter_text($xw, 'This is a sample text, ä');
xmlwriter_end_element($xw); // tag11

xmlwriter_end_element($xw); // tag1


// CDATA
xmlwriter_start_element($xw, 'testc');
xmlwriter_write_cdata($xw, "This is cdata content");
xmlwriter_end_element($xw); // testc

xmlwriter_start_element($xw, 'testc');
xmlwriter_start_cdata($xw);
xmlwriter_text($xw, "test cdata2");
xmlwriter_end_cdata($xw);
xmlwriter_end_element($xw); // testc

// Инструкции по обработке
xmlwriter_start_pi($xw, 'php');
xmlwriter_text($xw, '$foo=2;echo $foo;');
xmlwriter_end_pi($xw);

xmlwriter_end_document($xw);

echo xmlwriter_output_memory($xw);


/*
 * Объектно ориентированный подход
 */
// THIS IS ABSOLUTELY ESSENTIAL - DO NOT FORGET TO SET THIS
@date_default_timezone_set("GMT");

$writer = new XMLWriter();
// Output directly to the user

$writer->openURI('php://output');
$writer->startDocument('1.0');

$writer->setIndent(4);

// declare it as an rss document
$writer->startElement('rss');
$writer->writeAttribute('version', '2.0');
$writer->writeAttribute('xmlns:atom', 'http://www.w3.org/2005/Atom');


$writer->startElement("channel");
//----------------------------------------------------
//$writer->writeElement('ttl', '0');
$writer->writeElement('title', 'Latest Products');
$writer->writeElement('description', 'This is the latest products from our website.');
$writer->writeElement('link', 'http://www.domain.com/link.htm');
$writer->writeElement('pubDate', date("D, d M Y H:i:s e"));
$writer->startElement('image');
$writer->writeElement('title', 'Latest Products');
$writer->writeElement('link', 'http://www.domain.com/link.htm');
$writer->writeElement('url', 'http://www.iab.net/media/image/120x60.gif');
$writer->writeElement('width', '120');
$writer->writeElement('height', '60');
$writer->endElement();
//----------------------------------------------------



//----------------------------------------------------
$writer->startElement("item");
$writer->writeElement('title', 'New Product 8');
$writer->writeElement('link', 'http://www.domain.com/link.htm');
$writer->writeElement('description', 'Description 8 Yeah!');
$writer->writeElement('guid', 'http://www.domain.com/link.htm?tiem=1234');

$writer->writeElement('pubDate', date("D, d M Y H:i:s e"));

$writer->startElement('category');
$writer->writeAttribute('domain', 'http://www.domain.com/link.htm');
$writer->text('May 2008');
$writer->endElement(); // Category

// End Item
$writer->endElement();
//----------------------------------------------------


// End channel
$writer->endElement();

// End rss
$writer->endElement();

$writer->endDocument();

$writer->flush();