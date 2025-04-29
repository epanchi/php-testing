<?php

namespace Tests;

use App\TagParser;
use PHPUnit\Framework\TestCase;

class TagParserTest extends TestCase
{
    protected TagParser $parser;

    public function setUp(): void
    {
        parent::setUp();
        $this->parser = new TagParser;
    }
    // comma separated list of tags
    public function test_it_parses_a_single_tag()
    {
        $result = $this->parser->parse('personal');
        $expected = ['personal'];
        $this->assertSame($expected, $result);
    }

    // comma separated list of tags
    public function test_it_parses_a_coma_separated_list_of_tags()
    {
        $result = $this->parser->parse('personal, money, family');
        $expected = ['personal', 'money', 'family'];

        $this->assertSame($expected, $result);
    }

    // comma separated list of tags
    public function test_it_parses_a_pipe_separated_list_of_tags()
    {
        $result = $this->parser->parse('personal | money | family');
        $expected = ['personal', 'money', 'family'];

        $this->assertSame($expected, $result);
    }
}
