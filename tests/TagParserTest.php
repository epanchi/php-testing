<?php

namespace Tests;

use App\TagParser;
use PHPUnit\Framework\TestCase;

class TagParserTest extends TestCase
{
    // comma separated list of tags
    public function test_it_parses_a_single_tag()
    {
        $parser = new TagParser;

        $result = $parser->parse('personal');
        $expected=['personal'];
        $this->assertSame($expected, $result);

    }

        // comma separated list of tags
        public function test_it_parses_a_coma_separated_list_of_tags()
        {
            $parser = new TagParser;

            $result = $parser->parse('personal, money, family');
            $expected=['personal', 'money', 'family'];

            $this->assertSame($expected, $result);

        }

            // comma separated list of tags
            public function test_it_parses_a_pipe_separated_list_of_tags()
            {
                $parser = new TagParser;

                $result = $parser->parse('personal | money | family');
                $expected=['personal', 'money', 'family'];

                $this->assertSame($expected, $result);

            }
}
