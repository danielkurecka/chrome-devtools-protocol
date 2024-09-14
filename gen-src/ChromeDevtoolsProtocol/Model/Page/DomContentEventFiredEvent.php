<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.DomContentEventFiredEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DomContentEventFiredEvent implements \JsonSerializable
{
	/** @var int|float */
	public $timestamp;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		return $instance;
	}


	public function jsonSerialize(): \stdClass
	{
		$data = new \stdClass();
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		return $data;
	}
}
