<?php
namespace Drahak\Restful;

/**
 * IResource determines REST service result set
 * @package Drahak\Restful
 * @author Drahomír Hanák
 */
interface IResource
{

	/** Result types */
	const XML = 'application/xml';
	const JSON = 'application/json';
	const JSONP = 'application/javascript';
	const QUERY = 'text/x-query';
	const DATA_URL = 'application/x-data-url';
	const NULL = 'NULL';

	/**
	 * Get content type
	 * @return string
	 */
	public function getContentType();

	/**
	 * Set content type
	 * @param string $contentType
	 * @return void
	 */
	public function setContentType($contentType);

	/**
	 * Get result set data
	 * @return array|\stdClass|\Traversable
	 */
	public function getData();

}