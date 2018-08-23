<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 23-Aug-18
 * Time: 11:41
 */

namespace Dallask\DesignPatterns;

use PHPUnit\Framework\TestCase;

class ParserFactoryTest extends TestCase
{

    public $factory;

    public function __construct(
        string $name = null, array $data = [], string $dataName = ''
    )
    {
        parent::__construct($name, $data, $dataName);
        $this->factory = new ParserFactory();
    }


    public function testObjectType()
    {
        $this->assertInstanceOf('Dallask\DesignPatterns\ParserFactory', $this->factory);
    }

    public function testObjectTypeCSVParser()
    {
        $parserObject = $this->factory->createCSVParser();
        $this->assertInstanceOf('Dallask\DesignPatterns\CSVParser', $parserObject);
    }

    public function testCreateCSVParser()
    {
        $parserObject = $this->factory->createCSVParser();
        $parserResult = $parserObject->parse('');
        $this->assertEquals($parserResult['type'], 'csv');
    }

    public function testCreateJSONParser()
    {
        $parserObject = $this->factory->createJSONParser();
        $parserResult = $parserObject->parse('');
        $this->assertEquals($parserResult['type'], 'json');
    }
}
