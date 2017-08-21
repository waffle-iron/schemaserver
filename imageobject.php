<?php
/**
 * @author Chris Zuber <chris@chriszuber.com>
 * @package shgysk8zer0/schemaserver
 * @copyright 2017
 * @license https://opensource.org/licenses/LGPL-3.0 GNU Lesser General Public License version 3
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3.0 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library.
 */
namespace shgysk8zer0\SchemaServer;

/**
 * @see https://schema.org/ImageObject
 */
class ImageObject extends MediaObject
{
	/**
	 * [setCaption description]
	 * @param String $caption [description]
	 */
	final public function setCaption(String $caption)
	{
		$this->_set('caption', $caption);
	}

	/**
	 * [setThumbnail description]
	 * @param ImageObject $thumbnail [description]
	 */
	final public function setThumbnail(ImageObject $thumbnail)
	{
		$this->_set('thumbnail', $thumbnail);
	}
}
