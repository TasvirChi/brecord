// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Borhan Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2011  Borhan Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================
package com.borhan.vo
{
	import com.borhan.vo.BorhanBatchJobListResponse;

	import com.borhan.vo.BorhanFileSyncListResponse;

	import com.borhan.vo.BorhanBaseEntry;

	import com.borhan.vo.BaseFlexVo;

	[Bindable]
	public dynamic class BorhanInvestigateEntryData extends BaseFlexVo
	{
		/**
		**/
		public var entry : BorhanBaseEntry;

		/**
		**/
		public var fileSyncs : BorhanFileSyncListResponse;

		/**
		**/
		public var jobs : BorhanBatchJobListResponse;

		/**
		**/
		public var flavorAssets : Array = null;

		/**
		**/
		public var thumbAssets : Array = null;

		/**
		**/
		public var tracks : Array = null;

		/** 
		* a list of attributes which may be updated on this object 
		**/ 
		public function getUpdateableParamKeys():Array
		{
			var arr : Array;
			arr = new Array();
			return arr;
		}

		/** 
		* a list of attributes which may only be inserted when initializing this object 
		**/ 
		public function getInsertableParamKeys():Array
		{
			var arr : Array;
			arr = new Array();
			return arr;
		}

		/** 
		* get the expected type of array elements 
		* @param arrayName 	 name of an attribute of type array of the current object 
		* @return 	 un-qualified class name 
		**/ 
		public function getElementType(arrayName:String):String
		{
			var result:String = '';
			switch (arrayName) {
				case 'entry':
					result = '';
					break;
				case 'fileSyncs':
					result = '';
					break;
				case 'jobs':
					result = '';
					break;
				case 'flavorAssets':
					result = 'BorhanInvestigateFlavorAssetData';
					break;
				case 'thumbAssets':
					result = 'BorhanInvestigateThumbAssetData';
					break;
				case 'tracks':
					result = 'BorhanTrackEntry';
					break;
			}
			return result;
		}
	}
}
