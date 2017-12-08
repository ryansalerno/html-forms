<?php

use PHPUnit\Framework\TestCase;

use Brain\Monkey;
use Brain\Monkey\Functions;
use HTML_Forms\Form;

class FormTest extends TestCase {

	protected function setUp() {
		parent::setUp();
		Monkey\setUp();
	}

	protected function tearDown() {
		Monkey\tearDown();
		parent::tearDown();
	}

	/**
	* @covers Forms::get_markup
	*/
	public function test_get_markup() {
		$form = new Form(1);
		self::assertEquals( '', $form->get_markup() );
	}

	/**
	* @covers Forms::get_email_fields
	*/
	public function test_get_email_fields() {
		$form = new Form(1);
		$form->settings['email_fields'] = 'EMAIL,OTHER_EMAIL';
		self::assertEquals( array( 'EMAIL', 'OTHER_EMAIL' ), $form->get_email_fields() );
	}

	/**
	* @covers Forms::get_required_fields
	*/
	public function test_get_required_fields() {
		$form = new Form(1);
		$form->settings['required_fields'] = 'EMAIL,NAME';
		self::assertEquals( array( 'EMAIL', 'NAME' ), $form->get_required_fields() );
	}
}