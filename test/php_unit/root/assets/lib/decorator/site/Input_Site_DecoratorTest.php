<?php

/**
 * Test class for Input_Site_Decorator.
 * 
 * @author trott
 * @copyright Copyright (c) 2012 UC Regents
 * @license http://mwf.ucla.edu/license
 * @version 20120315
 *
 * @uses PHPUnit_Framework_TestCase
 * @uses Input_Site_Decorator
 */
require dirname(dirname(dirname(dirname(dirname(dirname(dirname(__DIR__))))))) . '/root/assets/lib/decorator/site/input.class.php';

/**
 * Test class for Input_Site_Decorator.
 * Generated by PHPUnit on 2012-03-15 at 22:34:55.
 */
class Input_Site_DecoratorTest extends PHPUnit_Framework_TestCase {

    //@todo: remove this after fixing Config object
    public function setUp() {
        $_SERVER['HTTP_HOST'] = 'http://www.example.com';
        $this->object = new Input_Site_Decorator('input_id', 'input_label');
    }

    protected $object;

    /**
     * @test
     */
    public function isMandatory_mandatory_true() {
        $this->object->mandatory();
        $this->assertSame(true, $this->object->is_mandatory());
    }

    /**
     * @test
     */
    public function isMandatory_notMandatory_false() {
        $this->assertSame(false, $this->object->is_mandatory());
    }

    /**
     * @test
     */
    public function setPlacedholder_placeholderText_placedholderRendered() {
        $this->object->set_placeholder('Input placeholder text');
        $this->assertContains('Input placeholder text', $this->object->render());
    }

    /**
     * @test
     */
    public function mandatory_void_requireRendered() {
        $this->object->mandatory();
        $this->assertContains('required="required"', $this->object->render());
    }

    /**
     * @test
     */
    public function invalid_void_invalidClassApplied() {
        $this->object->invalid();
        $rendered = $this->object->render();
        $this->assertContains('class="invalid"', $rendered);
    }

    /**
     * @test
     */
    public function invalid_message_invalidClassAppliedAndMessageStored() {
        $this->object->invalid('Error message');
        $rendered = $this->object->render();
        $this->assertContains('class="invalid"', $rendered);
        $this->assertEquals('Error message', $this->object->get_invalid_message());
    }

    /**
     * @test
     */
    public function isInvalid_valid_false() {
        $this->assertFalse($this->object->is_invalid());
    }

    /**
     * @test
     */
    public function isInvalid_invalid_true() {
        $this->object->invalid();
        $this->assertTrue($this->object->is_invalid());
    }

    /**
     * @test
     */
    public function disable_void_disabledRendered() {
        $this->object->disable();
        $this->assertContains('disabled="disabled"', $this->object->render());
    }

    /**
     * @test
     */
    public function typeText_previousType_textRendered() {
        $this->object->type_color();
        $this->object->type_text();
        $rendered = $this->object->render();
        $this->assertContains('type="text"', $rendered);
        $this->assertNotContains('type="color"', $rendered);
    }

    /**
     * @test
     */
    public function typeColor_void_colorRendered() {
        $this->object->type_color();
        $this->assertContains('type="color"', $this->object->render());
    }

    /**
     * @test
     */
    public function typeSearch_void_searchRendered() {
        $this->object->type_search();
        $this->assertContains('type="search"', $this->object->render());
    }

    /**
     * @test
     */
    public function typeTelephone_void_telephoneRendered() {
        $this->object->type_telephone();
        $this->assertContains('type="tel"', $this->object->render());
    }

    /**
     * @test
     */
    public function typeUrl_void_urlRendered() {
        $this->object->type_url();
        $this->assertContains('type="url"', $this->object->render());
    }

    /**
     * @test
     */
    public function typeEmail_void_emailRendered() {
        $this->object->type_email();
        $this->assertContains('type="email"', $this->object->render());
    }

    /**
     * @test
     */
    public function typeDate_void_dateRendered() {
        $this->object->type_date();
        $this->assertContains('type="date"', $this->object->render());
    }

    /**
     * @test
     */
    public function typeMonth_void_monthRendered() {
        $this->object->type_month();
        $this->assertContains('type="month"', $this->object->render());
    }

    /**
     * @test
     */
    public function typeWeek_void_monthRendered() {
        $this->object->type_week();
        $this->assertContains('type="week"', $this->object->render());
    }

    /**
     * @test
     */
    public function typeDatetimeLocal_void_datetimeLocalRendered() {
        $this->object->type_datetime_local();
        $this->assertContains('type="datetime-local"', $this->object->render());
    }

    /**
     * @test
     */
    public function typeTime_void_timeRendered() {
        $this->object->type_time();
        $this->assertContains('type="time"', $this->object->render());
    }

    /**
     * @test
     */
    public function typeSubmit_void_submitRendered() {
        $this->object->type_submit();
        $this->assertContains('type="submit"', $this->object->render());
    }

    /**
     * @test
     */
    public function typeSubmit_void_classPrimary() {
        $this->object->type_submit();
        $this->assertContains('class="primary"', $this->object->render());
    }

    /**
     * @test
     */
    public function typeButton_void_submitRendered() {
        $this->object->type_button();
        $this->assertContains('type="submit"', $this->object->render());
    }

    /**
     * @test
     */
    public function typeButton_void_classNeutral() {
        $this->object->type_button();
        $this->assertContains('class="neutral"', $this->object->render());
    }

    /**
     * @test
     */
    public function typeCheckbox_void_checkboxRendered() {
        $this->object->type_checkbox();
        $this->assertContains('type="checkbox"', $this->object->render());
    }

    /**
     * @test
     */
    public function typeRadio_void_selectRendered() {
        $this->object->type_radio();
        $this->assertContains('type="radio"', $this->object->render());
    }
    
    /**
     * @test
     */
    public function typeNumber_void_numberRendered() {
        $this->object->type_number();
        $this->assertContains('type="number"', $this->object->render());
    }

    /**
     * @test
     */
    public function primary_void_classPrimary() {
        $this->object->type_button();
        $this->object->primary();
        $this->assertContains('class="primary"', $this->object->render());
    }

    /**
     * @test
     */
    public function secondary_void_classSecondary() {
        $this->object->type_button();
        $this->object->secondary();
        $this->assertContains('class="secondary"', $this->object->render());
    }

    /**
     * @test
     */
    public function neutral_void_classNeutral() {
        $this->object->type_button();
        $this->object->neutral();
        $this->assertContains('class="neutral"', $this->object->render());
    }

    /**
     * @test
     */
    public function render_void_inputRendered() {
        $rendered = $this->object->render();
        $this->assertRegExp('/<input.*id="input_id".*>/', $rendered);
        $this->assertRegExp('/<input.*name="input_id".*>/', $rendered);
    }

    /**
     * @test
     */
    public function setName_foo_nameIsDifferentFromId() {
        $this->object->set_name('foo');
        $rendered = $this->object->render();

        $this->assertRegExp('/<input.*id="input_id".*>/', $rendered);
        $this->assertRegExp('/<input.*name="foo".*>/', $rendered);
    }

    /**
     * @test
     */
    public function setValue_foo_valueIsFoo() {
        $this->object->set_value('foo');
        $rendered = $this->object->render();
        $this->assertRegExp('/<input.*value="foo".*>/', $rendered);
    }

    /**
     * @test
     */
    public function isOption_checkbox_true() {
        $this->object->type_checkbox();
        $this->assertTrue($this->object->is_option());
    }

    /**
     * @test
     */
    public function isOption_radio_true() {
        $this->object->type_radio();
        $this->assertTrue($this->object->is_option());
    }

    /**
     * @test
     */
    public function isOption_void_false() {
        $this->assertFalse($this->object->is_option());
    }

    /**
     * @test
     */
    public function isOption_text_false() {
        $this->object->type_text();
        $this->assertFalse($this->object->is_option());
    }

}