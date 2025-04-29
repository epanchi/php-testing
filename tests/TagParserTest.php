<?php

namespace Tests;

use App\TagParser;
use PHPUnit\Framework\TestCase;

class TagParserTest extends TestCase
{

    /**
     *  @dataProvider tagsProvider */

    public function test_it_parses_tags($input, $expected){
        $parser = new TagParser();
        $result = $parser->parse($input);
        $this->assertSame($expected, $result);
    }

    public static function tagsProvider()
    {
        return [
            ['personal', ['personal']],
            ['personal, money, family', ['personal', 'money', 'family']],
            ['personal | money | family', ['personal', 'money', 'family']],
            ['personal, money | family', ['personal', 'money', 'family']],
           // ['personal, money | family, work', ['personal', 'money', 'family', 'work']],
        ];
    }
    // // comma separated list of tags
    // public function test_it_parses_a_single_tag()
    // {
    //     $result = $this->parser->parse('personal');
    //     $expected = ['personal'];
    //     $this->assertSame($expected, $result);
    // }

    // // comma separated list of tags
    // public function test_it_parses_a_coma_separated_list_of_tags()
    // {
    //     $result = $this->parser->parse('personal, money, family');
    //     $expected = ['personal', 'money', 'family'];

    //     $this->assertSame($expected, $result);
    // }

    // // comma separated list of tags
    // public function test_it_parses_a_pipe_separated_list_of_tags()
    // {
    //     $result = $this->parser->parse('personal | money | family');
    //     $expected = ['personal', 'money', 'family'];

    //     $this->assertSame($expected, $result);
    // }
}
