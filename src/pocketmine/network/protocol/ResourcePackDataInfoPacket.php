<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____  
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \ 
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/ 
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_| 
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 * 
 *
*/

namespace pocketmine\network\protocol;

#include <rules/DataPacket.h>


class ResourcePackDataInfoPacket extends DataPacket{
	const NETWORK_ID = Info::RESOURCE_PACK_DATA_INFO_PACKET;

	public $packageId;
	public $uk1;
	public $uk2;
	public $uk3;
	public $uk4;

	public function decode(){

	}

	public function encode(){
		$this->reset();
		$this->putString($this->packageId);
		$this->putUnsignedVarInt($this->uk1);
		$this->putUnsignedVarInt($this->uk2);
		$this->putInt($this->uk3);
		$this->putString($this->uk4);

	}

}