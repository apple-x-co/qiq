<?php
namespace Qiq\Helper\Html;

class ScriptTest extends HtmlHelperTest
{
    public function test() : void
    {
        $actual = $this->helpers->script('script.js');
        $expect = '<script src="script.js" type="text/javascript"></script>';
        $this->assertSame($expect, $actual);
    }
}
