<?php
namespace Tests;

use Diolan12\Lipsum;
use PHPUnit\Framework\TestCase;
use Diolan12\LoremIpsum;

class UnitTest extends TestCase
{
    /**
     * Test LoremIpsum class to generate words
     *
     * @return void
     */
    public function testWords()
    {
        $lipsum = LoremIpsum::instance();
        $this->assertEquals($lipsum->words(), "Lorem ipsum");
        $this->assertEquals($lipsum->words(5), "Lorem ipsum dolor sit amet,");
        $this->assertEquals($lipsum->words(5, "-"), "Lorem-ipsum-dolor-sit-amet,");
    }

    /**
     * Test LoremIpsum class to generate sentences
     *
     * @return void
     */
    public function testSentence()
    {
        $lipsum = LoremIpsum::instance();
        $this->assertEquals($lipsum->sentences(), "Lorem ipsum dolor sit amet, consectetur adipiscing elit.");
        $this->assertEquals($lipsum->sentences(2), "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis vehicula urna, ac dictum turpis vulputate rutrum.");
        $this->assertEquals($lipsum->sentences(2, '<br>'), "Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Maecenas mollis vehicula urna, ac dictum turpis vulputate rutrum.");
    }

    /**
     * Test LoremIpsum class to generate paragraphs
     *
     * @return void
     */
    public function testParagraphs()
    {
        $lipsum = LoremIpsum::instance();
        $this->assertEquals($lipsum->paragraphs(), "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis vehicula urna, ac dictum turpis vulputate rutrum. Nulla pharetra massa ligula, a malesuada nibh vehicula nec. Morbi rhoncus sagittis accumsan. Nulla lacinia ex a vehicula cursus. Nunc pulvinar finibus pulvinar. Maecenas eleifend ut sapien a pellentesque. Vestibulum justo purus, tristique quis enim et, dignissim volutpat arcu. Aliquam erat volutpat. In hac habitasse platea dictumst. Nulla et malesuada turpis, ac finibus enim. Fusce non arcu ut est imperdiet mollis. Mauris ultrices purus a tortor consequat rhoncus. Sed eu lacus ac odio fermentum ullamcorper ac rutrum ipsum. Vestibulum lobortis dolor pretium aliquet mollis. Curabitur euismod ante commodo neque ornare, in semper nunc gravida. Ut pretium tellus pulvinar dolor lacinia, vel pretium lacus dictum.");
        $this->assertEquals($lipsum->paragraphs(2), "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis vehicula urna, ac dictum turpis vulputate rutrum. Nulla pharetra massa ligula, a malesuada nibh vehicula nec. Morbi rhoncus sagittis accumsan. Nulla lacinia ex a vehicula cursus. Nunc pulvinar finibus pulvinar. Maecenas eleifend ut sapien a pellentesque. Vestibulum justo purus, tristique quis enim et, dignissim volutpat arcu. Aliquam erat volutpat. In hac habitasse platea dictumst. Nulla et malesuada turpis, ac finibus enim. Fusce non arcu ut est imperdiet mollis. Mauris ultrices purus a tortor consequat rhoncus. Sed eu lacus ac odio fermentum ullamcorper ac rutrum ipsum. Vestibulum lobortis dolor pretium aliquet mollis. Curabitur euismod ante commodo neque ornare, in semper nunc gravida. Ut pretium tellus pulvinar dolor lacinia, vel pretium lacus dictum.\nPellentesque lacinia iaculis erat quis dictum. Morbi mattis orci vel aliquam fringilla. Etiam hendrerit dictum orci, ac rutrum ligula porta quis. Aliquam volutpat arcu non ipsum lacinia, a fringilla lacus interdum. Nulla non iaculis mi. Morbi auctor, nisl malesuada consectetur cursus, enim ante gravida tortor, ac semper risus orci vitae enim. Vivamus vitae nisl commodo, dictum ex vel, lacinia erat. Donec ut sem quis purus sodales tempus. Nulla condimentum ex eget tellus rhoncus, eu dignissim diam congue. Fusce enim ante, pretium ut porta vel, accumsan sit amet velit. Curabitur suscipit et mauris sit amet rutrum.");
        $this->assertEquals($lipsum->paragraphs(2, '<br>'), "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis vehicula urna, ac dictum turpis vulputate rutrum. Nulla pharetra massa ligula, a malesuada nibh vehicula nec. Morbi rhoncus sagittis accumsan. Nulla lacinia ex a vehicula cursus. Nunc pulvinar finibus pulvinar. Maecenas eleifend ut sapien a pellentesque. Vestibulum justo purus, tristique quis enim et, dignissim volutpat arcu. Aliquam erat volutpat. In hac habitasse platea dictumst. Nulla et malesuada turpis, ac finibus enim. Fusce non arcu ut est imperdiet mollis. Mauris ultrices purus a tortor consequat rhoncus. Sed eu lacus ac odio fermentum ullamcorper ac rutrum ipsum. Vestibulum lobortis dolor pretium aliquet mollis. Curabitur euismod ante commodo neque ornare, in semper nunc gravida. Ut pretium tellus pulvinar dolor lacinia, vel pretium lacus dictum.<br>Pellentesque lacinia iaculis erat quis dictum. Morbi mattis orci vel aliquam fringilla. Etiam hendrerit dictum orci, ac rutrum ligula porta quis. Aliquam volutpat arcu non ipsum lacinia, a fringilla lacus interdum. Nulla non iaculis mi. Morbi auctor, nisl malesuada consectetur cursus, enim ante gravida tortor, ac semper risus orci vitae enim. Vivamus vitae nisl commodo, dictum ex vel, lacinia erat. Donec ut sem quis purus sodales tempus. Nulla condimentum ex eget tellus rhoncus, eu dignissim diam congue. Fusce enim ante, pretium ut porta vel, accumsan sit amet velit. Curabitur suscipit et mauris sit amet rutrum.");
    }

    /**
     * Test LoremIpsum class to generate result with wrapper
     *
     * @return void
     */
    public function testWrapper()
    {
        $lipsum = LoremIpsum::instance();
        $lipsum->wrap();
        $this->assertEquals("<p>Lorem ipsum</p>", $lipsum->words(), 'asd');
        $this->assertEquals($lipsum->wrap('span')->words(), "<span>Lorem ipsum</span>");
        $lipsum->wrap();
        $this->assertEquals($lipsum->sentences(), "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>");
        $this->assertEquals($lipsum->wrap('span')->paragraphs(), "<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis vehicula urna, ac dictum turpis vulputate rutrum. Nulla pharetra massa ligula, a malesuada nibh vehicula nec. Morbi rhoncus sagittis accumsan. Nulla lacinia ex a vehicula cursus. Nunc pulvinar finibus pulvinar. Maecenas eleifend ut sapien a pellentesque. Vestibulum justo purus, tristique quis enim et, dignissim volutpat arcu. Aliquam erat volutpat. In hac habitasse platea dictumst. Nulla et malesuada turpis, ac finibus enim. Fusce non arcu ut est imperdiet mollis. Mauris ultrices purus a tortor consequat rhoncus. Sed eu lacus ac odio fermentum ullamcorper ac rutrum ipsum. Vestibulum lobortis dolor pretium aliquet mollis. Curabitur euismod ante commodo neque ornare, in semper nunc gravida. Ut pretium tellus pulvinar dolor lacinia, vel pretium lacus dictum.</span>");
    }

    /**
     * Test LoremIpsum class with static instantiation
     *
     * @return void
     */
    public function testStaticCall()
    {
        $this->assertEquals(LoremIpsum::instance()->words(), "Lorem ipsum");
        $this->assertEquals(LoremIpsum::instance()->wrap()->words(), "<p>Lorem ipsum</p>");
        $this->assertEquals(LoremIpsum::instance()->sentences(), "Lorem ipsum dolor sit amet, consectetur adipiscing elit.");
        $this->assertEquals(LoremIpsum::instance()->wrap('span')->paragraphs(), "<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis vehicula urna, ac dictum turpis vulputate rutrum. Nulla pharetra massa ligula, a malesuada nibh vehicula nec. Morbi rhoncus sagittis accumsan. Nulla lacinia ex a vehicula cursus. Nunc pulvinar finibus pulvinar. Maecenas eleifend ut sapien a pellentesque. Vestibulum justo purus, tristique quis enim et, dignissim volutpat arcu. Aliquam erat volutpat. In hac habitasse platea dictumst. Nulla et malesuada turpis, ac finibus enim. Fusce non arcu ut est imperdiet mollis. Mauris ultrices purus a tortor consequat rhoncus. Sed eu lacus ac odio fermentum ullamcorper ac rutrum ipsum. Vestibulum lobortis dolor pretium aliquet mollis. Curabitur euismod ante commodo neque ornare, in semper nunc gravida. Ut pretium tellus pulvinar dolor lacinia, vel pretium lacus dictum.</span>");
    }
}