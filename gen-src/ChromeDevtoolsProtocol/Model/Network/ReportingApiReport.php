<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * An object representing a report generated by the Reporting API.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportingApiReport implements \JsonSerializable
{
	/** @var string */
	public $id;

	/**
	 * The URL of the document that triggered the report.
	 *
	 * @var string
	 */
	public $initiatorUrl;

	/**
	 * The name of the endpoint group that should be used to deliver the report.
	 *
	 * @var string
	 */
	public $destination;

	/**
	 * The type of the report (specifies the set of data that is contained in the report body).
	 *
	 * @var string
	 */
	public $type;

	/**
	 * When the report was generated.
	 *
	 * @var int|float
	 */
	public $timestamp;

	/**
	 * How many uploads deep the related request was.
	 *
	 * @var int
	 */
	public $depth;

	/**
	 * The number of delivery attempts made so far, not including an active attempt.
	 *
	 * @var int
	 */
	public $completedAttempts;

	/** @var object */
	public $body;

	/** @var string */
	public $status;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		if (isset($data->initiatorUrl)) {
			$instance->initiatorUrl = (string)$data->initiatorUrl;
		}
		if (isset($data->destination)) {
			$instance->destination = (string)$data->destination;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		if (isset($data->depth)) {
			$instance->depth = (int)$data->depth;
		}
		if (isset($data->completedAttempts)) {
			$instance->completedAttempts = (int)$data->completedAttempts;
		}
		if (isset($data->body)) {
			$instance->body = $data->body;
		}
		if (isset($data->status)) {
			$instance->status = (string)$data->status;
		}
		return $instance;
	}


	public function jsonSerialize(): \stdClass
	{
		$data = new \stdClass();
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->initiatorUrl !== null) {
			$data->initiatorUrl = $this->initiatorUrl;
		}
		if ($this->destination !== null) {
			$data->destination = $this->destination;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		if ($this->depth !== null) {
			$data->depth = $this->depth;
		}
		if ($this->completedAttempts !== null) {
			$data->completedAttempts = $this->completedAttempts;
		}
		if ($this->body !== null) {
			$data->body = $this->body;
		}
		if ($this->status !== null) {
			$data->status = $this->status;
		}
		return $data;
	}
}
