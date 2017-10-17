<?php

	include_once(__DIR__ . '/../../vendor/autoload.php');

	class ParserModelTest extends PHPUnit_Framework_TestCase
	{
		public function testGetArrayFromSelector()
		{
			$parser = new ParserModel();

			$html = '<body>
				<a href="link1">text1</a>
				<a href="link2">text2<a>
				<a href="link3">text3</a>
			</body>';

			$parser->loadData($html);

			$result = $parser->getArrayFromSelector('a[href]', 'href');

			$this->assertTrue(count($result) == 3);
			$this->assertTrue($result[1] == 'link2');
		}
	}