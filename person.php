<?php
/**
 * @author Chris Zuber <chris@chriszuber.com>
 * @package superuserdev/schemaserver
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
namespace SuperUserDev\SchemaServer;

/**
 * @see https://schema.org/Person
 */
class Person extends Thing
{
	use Traits\ContactInfo;
	use Traits\Address;
	use Traits\DateTime;

	/**
	 * [setAdditionalName description]
	 * @param String $name [description]
	 */
	final public function setAdditionalName(String $name): self
	{
		return $this->_set('additionalName', $name);
	}

	/**
	 * [setBirthDate description]
	 * @param String $bday [description]
	 */
	final public function setBirthDate(String $bday): self
	{
		return $this->_set('birthDate', static::formatDateTime($bday, true, false));
	}

	/**
	 * [setFamilyName description]
	 * @param String $name [description]
	 */
	final public function setFamilyName(String $name): self
	{
		return $this->_set('familyName', $name);
	}

	/**
	 * [setGivenName description]
	 * @param String $name [description]
	 */
	final public function setGivenName(String $name): self
	{
		return $this->_set('givenName', $name);
	}

	/**
	 * [setHomeLocation description]
	 * @param Thing $loc [description]
	 */
	final public function setHomeLocation(Thing $loc): self
	{
		if ($loc instanceof ContactPoint or $loc instanceof Place) {
			return $this->_set('homeLocation', $loc);
		} else {
			throw new \InvalidArgumentException(sprintf('Location must be an instance of ContactPoint or Place. Instance of %s given', $loc::getType()));
		}
	}

	/**
	 * [setHonorificPrefix description]
	 * @param String $prefix [description]
	 */
	final public function setHonorificPrefix(String $prefix): self
	{
		return $this->_set('honorificPrefix', $prefix);
	}

	/**
	 * [setHonorificSuffix description]
	 * @param String $suffix [description]
	 */
	final public function setHonorificSuffix(String $suffix): self
	{
		return $this->_set('honorificPrefix', $suffix);
	}

	/**
	 * [setJobTitle description]
	 * @param String $job_title [description]
	 */
	final public function setJobTitle(String $job_title): self
	{
		return $this->_set('jobTitle', $job_title);
	}

	/**
	 * [setHomeLocation description]
	 * @param Thing $loc [description]
	 */
	final public function setWorkLocation(Thing $loc): self
	{
		if ($loc instanceof ContactPoint or $loc instanceof Place) {
			return $this->_set('workLocation', $loc);
		} else {
			throw new \InvalidArgumentException(sprintf('Location must be an instance of ContactPoint or Place. Instance of %s given', $loc::getType()));
		}
	}

	/**
	 * [setWorksFor description]
	 * @param Organization $org [description]
	 */
	final public function setWorksFor(Organization $org): self
	{
		return $this->_set('worksFor', $org);
	}
}
