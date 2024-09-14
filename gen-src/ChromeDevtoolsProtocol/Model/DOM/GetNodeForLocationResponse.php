<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Response to DOM.getNodeForLocation command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetNodeForLocationResponse implements \JsonSerializable
{
	/**
	 * Resulting node.
	 *
	 * @var int
	 */
	public $backendNodeId;

	/**
	 * Frame this node belongs to.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Id of the node at given coordinates, only when enabled and requested document.
	 *
	 * @var int
	 */
	public $nodeId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = (int)$data->backendNodeId;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		return $instance;
	}


	public function jsonSerialize(): \stdClass
	{
		$data = new \stdClass();
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = $this->backendNodeId;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		return $data;
	}
}
