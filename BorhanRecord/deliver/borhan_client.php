<?php
/*
This file is part of the Borhan Collaborative Media Suite which allows users
to do with audio, video, and animation what Wiki platfroms allow them to do with
text.

Copyright (C) 2006-2008 Borhan Inc.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

require_once("borhan_client_base.php");

class BorhanEntry
{
	public $name;
	public $tags;
	public $type;
	public $mediaType;
	public $source;
	public $sourceId;
	public $sourceLink;
	public $licenseType;
	public $credit;
	public $groupId;
	public $partnerData;
	public $conversionQuality;
	public $permissions;
	public $dataContent;
	public $desiredVersion;
	public $url;
	public $thumbUrl;
	public $filename;
	public $realFilename;
	public $indexedCustomData1;
	public $thumbOffset;
}

class BorhanKShow
{
	public $name;
	public $description;
	public $tags;
	public $indexedCustomData3;
	public $groupId;
	public $permissions;
	public $partnerData;
	public $allowQuickEdit;
}

class BorhanModeration
{
	public $comments;
	public $objectType;
	public $objectId;
}

class BorhanUser
{
	public $screenName;
	public $fullName;
	public $email;
	public $dateOfBirth;
	public $aboutMe;
	public $tags;
	public $gender;
	public $country;
	public $state;
	public $city;
	public $zip;
	public $urlList;
	public $networkHighschool;
	public $networkCollege;
	public $partnerData;
}

class BorhanWidget
{
	public $kshowId;
	public $entryId;
	public $sourceWidgetId;
	public $uiConfId;
	public $customData;
	public $partnerData;
	public $securityType;
}

class BorhanPuserKuser
{
}

class BorhanUiConf
{
	public $name;
}

class BorhanEntryFilter
{
	const ORDER_BY_CREATED_AT_ASC = "+created_at";
	const ORDER_BY_CREATED_AT_DESC = "-created_at";
	const ORDER_BY_VIEWS_ASC = "+views";
	const ORDER_BY_VIEWS_DESC = "-views";
	const ORDER_BY_ID_ASC = "+id";
	const ORDER_BY_ID_DESC = "-id";

	public $equalUserId;
	public $equalKshowId;
	public $equalType;
	public $inType;
	public $equalMediaType;
	public $inMediaType;
	public $equalIndexedCustomData;
	public $inIndexedCustomData;
	public $likeName;
	public $equalGroupId;
	public $greaterThanOrEqualViews;
	public $greaterThanOrEqualCreatedAt;
	public $lessThanOrEqualCreatedAt;
	public $inPartnerId;
	public $equalPartnerId;
	public $orderBy;
}

class BorhanKShowFilter
{
	const ORDER_BY_CREATED_AT_ASC = "+created_at";
	const ORDER_BY_CREATED_AT_DESC = "-created_at";
	const ORDER_BY_VIEWS_ASC = "+views";
	const ORDER_BY_VIEWS_DESC = "-views";
	const ORDER_BY_ID_ASC = "+id";
	const ORDER_BY_ID_DESC = "-id";

	public $greaterThanOrEqualViews;
	public $equalType;
	public $equalProducerId;
	public $greaterThanOrEqualCreatedAt;
	public $lessThanOrEqualCreatedAt;
	public $orderBy;
}

class BorhanModerationFilter
{
	const ORDER_BY_ID_ASC = "+id";
	const ORDER_BY_ID_DESC = "-id";

	public $equalId;
	public $equalPuserId;
	public $equalStatus;
	public $likeComments;
	public $equalObjectId;
	public $equalObjectType;
	public $equalGroupId;
	public $orderBy;
}

class BorhanNotificationFilter
{
	const ORDER_BY_ID_ASC = "+id";
	const ORDER_BY_ID_DESC = "-id";

	public $equalId;
	public $greaterThanOrEqualId;
	public $equalStatus;
	public $equalType;
	public $orderBy;
}

class BorhanNotification
{
	public $id;
	public $status;
	public $notificationResult;
}

class BorhanPartner
{
	public $name;
	public $url1;
	public $url2;
	public $appearInSearch;
	public $adminName;
	public $adminEmail;
	public $description;
	public $commercialUse;
}

class BorhanClient extends BorhanClientBase
{
	public function __constructor()
	{
		parent::__constructor();
	}

	public function addDvdEntry(BorhanSessionUser $borhanSessionUser, BorhanEntry $dvdEntry)
	{
		$params = array();
		$this->addOptionalParam($params, "dvdEntry_name", $dvdEntry->name);
		$this->addOptionalParam($params, "dvdEntry_tags", $dvdEntry->tags);
		$this->addOptionalParam($params, "dvdEntry_type", $dvdEntry->type);
		$this->addOptionalParam($params, "dvdEntry_mediaType", $dvdEntry->mediaType);
		$this->addOptionalParam($params, "dvdEntry_source", $dvdEntry->source);
		$this->addOptionalParam($params, "dvdEntry_sourceId", $dvdEntry->sourceId);
		$this->addOptionalParam($params, "dvdEntry_sourceLink", $dvdEntry->sourceLink);
		$this->addOptionalParam($params, "dvdEntry_licenseType", $dvdEntry->licenseType);
		$this->addOptionalParam($params, "dvdEntry_credit", $dvdEntry->credit);
		$this->addOptionalParam($params, "dvdEntry_groupId", $dvdEntry->groupId);
		$this->addOptionalParam($params, "dvdEntry_partnerData", $dvdEntry->partnerData);
		$this->addOptionalParam($params, "dvdEntry_conversionQuality", $dvdEntry->conversionQuality);
		$this->addOptionalParam($params, "dvdEntry_permissions", $dvdEntry->permissions);
		$this->addOptionalParam($params, "dvdEntry_dataContent", $dvdEntry->dataContent);
		$this->addOptionalParam($params, "dvdEntry_desiredVersion", $dvdEntry->desiredVersion);
		$this->addOptionalParam($params, "dvdEntry_url", $dvdEntry->url);
		$this->addOptionalParam($params, "dvdEntry_thumbUrl", $dvdEntry->thumbUrl);
		$this->addOptionalParam($params, "dvdEntry_filename", $dvdEntry->filename);
		$this->addOptionalParam($params, "dvdEntry_realFilename", $dvdEntry->realFilename);
		$this->addOptionalParam($params, "dvdEntry_indexedCustomData1", $dvdEntry->indexedCustomData1);
		$this->addOptionalParam($params, "dvdEntry_thumbOffset", $dvdEntry->thumbOffset);

		$result = $this->hit("adddvdentry", $borhanSessionUser, $params);
		return $result;
	}

	public function addEntry(BorhanSessionUser $borhanSessionUser, $kshowId, BorhanEntry $entry, $uid = null)
	{
		$params = array();
		$params["kshow_id"] = $kshowId;
		$this->addOptionalParam($params, "entry_name", $entry->name);
		$this->addOptionalParam($params, "entry_tags", $entry->tags);
		$this->addOptionalParam($params, "entry_type", $entry->type);
		$this->addOptionalParam($params, "entry_mediaType", $entry->mediaType);
		$this->addOptionalParam($params, "entry_source", $entry->source);
		$this->addOptionalParam($params, "entry_sourceId", $entry->sourceId);
		$this->addOptionalParam($params, "entry_sourceLink", $entry->sourceLink);
		$this->addOptionalParam($params, "entry_licenseType", $entry->licenseType);
		$this->addOptionalParam($params, "entry_credit", $entry->credit);
		$this->addOptionalParam($params, "entry_groupId", $entry->groupId);
		$this->addOptionalParam($params, "entry_partnerData", $entry->partnerData);
		$this->addOptionalParam($params, "entry_conversionQuality", $entry->conversionQuality);
		$this->addOptionalParam($params, "entry_permissions", $entry->permissions);
		$this->addOptionalParam($params, "entry_dataContent", $entry->dataContent);
		$this->addOptionalParam($params, "entry_desiredVersion", $entry->desiredVersion);
		$this->addOptionalParam($params, "entry_url", $entry->url);
		$this->addOptionalParam($params, "entry_thumbUrl", $entry->thumbUrl);
		$this->addOptionalParam($params, "entry_filename", $entry->filename);
		$this->addOptionalParam($params, "entry_realFilename", $entry->realFilename);
		$this->addOptionalParam($params, "entry_indexedCustomData1", $entry->indexedCustomData1);
		$this->addOptionalParam($params, "entry_thumbOffset", $entry->thumbOffset);
		$this->addOptionalParam($params, "uid", $uid);

		$result = $this->hit("addentry", $borhanSessionUser, $params);
		return $result;
	}

	public function addKShow(BorhanSessionUser $borhanSessionUser, BorhanKShow $kshow, $detailed = null, $allowDuplicateNames = null)
	{
		$params = array();
		$this->addOptionalParam($params, "kshow_name", $kshow->name);
		$this->addOptionalParam($params, "kshow_description", $kshow->description);
		$this->addOptionalParam($params, "kshow_tags", $kshow->tags);
		$this->addOptionalParam($params, "kshow_indexedCustomData3", $kshow->indexedCustomData3);
		$this->addOptionalParam($params, "kshow_groupId", $kshow->groupId);
		$this->addOptionalParam($params, "kshow_permissions", $kshow->permissions);
		$this->addOptionalParam($params, "kshow_partnerData", $kshow->partnerData);
		$this->addOptionalParam($params, "kshow_allowQuickEdit", $kshow->allowQuickEdit);
		$this->addOptionalParam($params, "detailed", $detailed);
		$this->addOptionalParam($params, "allow_duplicate_names", $allowDuplicateNames);

		$result = $this->hit("addkshow", $borhanSessionUser, $params);
		return $result;
	}

	public function addModeration(BorhanSessionUser $borhanSessionUser, BorhanModeration $moderation)
	{
		$params = array();
		$this->addOptionalParam($params, "moderation_comments", $moderation->comments);
		$this->addOptionalParam($params, "moderation_objectType", $moderation->objectType);
		$this->addOptionalParam($params, "moderation_objectId", $moderation->objectId);

		$result = $this->hit("addmoderation", $borhanSessionUser, $params);
		return $result;
	}

	public function addPartnerEntry(BorhanSessionUser $borhanSessionUser, $kshowId, BorhanEntry $entry, $uid = null)
	{
		$params = array();
		$params["kshow_id"] = $kshowId;
		$this->addOptionalParam($params, "entry_name", $entry->name);
		$this->addOptionalParam($params, "entry_tags", $entry->tags);
		$this->addOptionalParam($params, "entry_type", $entry->type);
		$this->addOptionalParam($params, "entry_mediaType", $entry->mediaType);
		$this->addOptionalParam($params, "entry_source", $entry->source);
		$this->addOptionalParam($params, "entry_sourceId", $entry->sourceId);
		$this->addOptionalParam($params, "entry_sourceLink", $entry->sourceLink);
		$this->addOptionalParam($params, "entry_licenseType", $entry->licenseType);
		$this->addOptionalParam($params, "entry_credit", $entry->credit);
		$this->addOptionalParam($params, "entry_groupId", $entry->groupId);
		$this->addOptionalParam($params, "entry_partnerData", $entry->partnerData);
		$this->addOptionalParam($params, "entry_conversionQuality", $entry->conversionQuality);
		$this->addOptionalParam($params, "entry_permissions", $entry->permissions);
		$this->addOptionalParam($params, "entry_dataContent", $entry->dataContent);
		$this->addOptionalParam($params, "entry_desiredVersion", $entry->desiredVersion);
		$this->addOptionalParam($params, "entry_url", $entry->url);
		$this->addOptionalParam($params, "entry_thumbUrl", $entry->thumbUrl);
		$this->addOptionalParam($params, "entry_filename", $entry->filename);
		$this->addOptionalParam($params, "entry_realFilename", $entry->realFilename);
		$this->addOptionalParam($params, "entry_indexedCustomData1", $entry->indexedCustomData1);
		$this->addOptionalParam($params, "entry_thumbOffset", $entry->thumbOffset);
		$this->addOptionalParam($params, "uid", $uid);

		$result = $this->hit("addpartnerentry", $borhanSessionUser, $params);
		return $result;
	}

	public function addUser(BorhanSessionUser $borhanSessionUser, $userId, BorhanUser $user)
	{
		$params = array();
		$params["user_id"] = $userId;
		$this->addOptionalParam($params, "user_screenName", $user->screenName);
		$this->addOptionalParam($params, "user_fullName", $user->fullName);
		$this->addOptionalParam($params, "user_email", $user->email);
		$this->addOptionalParam($params, "user_dateOfBirth", $user->dateOfBirth);
		$this->addOptionalParam($params, "user_aboutMe", $user->aboutMe);
		$this->addOptionalParam($params, "user_tags", $user->tags);
		$this->addOptionalParam($params, "user_gender", $user->gender);
		$this->addOptionalParam($params, "user_country", $user->country);
		$this->addOptionalParam($params, "user_state", $user->state);
		$this->addOptionalParam($params, "user_city", $user->city);
		$this->addOptionalParam($params, "user_zip", $user->zip);
		$this->addOptionalParam($params, "user_urlList", $user->urlList);
		$this->addOptionalParam($params, "user_networkHighschool", $user->networkHighschool);
		$this->addOptionalParam($params, "user_networkCollege", $user->networkCollege);
		$this->addOptionalParam($params, "user_partnerData", $user->partnerData);

		$result = $this->hit("adduser", $borhanSessionUser, $params);
		return $result;
	}

	public function addWidget(BorhanSessionUser $borhanSessionUser, BorhanWidget $widget)
	{
		$params = array();
		$this->addOptionalParam($params, "widget_kshowId", $widget->kshowId);
		$this->addOptionalParam($params, "widget_entryId", $widget->entryId);
		$this->addOptionalParam($params, "widget_sourceWidgetId", $widget->sourceWidgetId);
		$this->addOptionalParam($params, "widget_uiConfId", $widget->uiConfId);
		$this->addOptionalParam($params, "widget_customData", $widget->customData);
		$this->addOptionalParam($params, "widget_partnerData", $widget->partnerData);
		$this->addOptionalParam($params, "widget_securityType", $widget->securityType);

		$result = $this->hit("addwidget", $borhanSessionUser, $params);
		return $result;
	}

	public function checkNotifications(BorhanSessionUser $borhanSessionUser, $notificationIds, $separator = ",", $detailed = null)
	{
		$params = array();
		$params["notification_ids"] = $notificationIds;
		$this->addOptionalParam($params, "separator", $separator);
		$this->addOptionalParam($params, "detailed", $detailed);

		$result = $this->hit("checknotifications", $borhanSessionUser, $params);
		return $result;
	}

	public function cloneKShow(BorhanSessionUser $borhanSessionUser, $kshowId, $detailed = null)
	{
		$params = array();
		$params["kshow_id"] = $kshowId;
		$this->addOptionalParam($params, "detailed", $detailed);

		$result = $this->hit("clonekshow", $borhanSessionUser, $params);
		return $result;
	}

	public function collectStats(BorhanSessionUser $borhanSessionUser, $objType, $objId, $command, $value, $extraInfo, $kshowId = null)
	{
		$params = array();
		$params["obj_type"] = $objType;
		$params["obj_id"] = $objId;
		$params["command"] = $command;
		$params["value"] = $value;
		$params["extra_info"] = $extraInfo;
		$this->addOptionalParam($params, "kshow_id", $kshowId);

		$result = $this->hit("collectstats", $borhanSessionUser, $params);
		return $result;
	}

	public function deleteEntry(BorhanSessionUser $borhanSessionUser, $entryId, $kshowId = null)
	{
		$params = array();
		$params["entry_id"] = $entryId;
		$this->addOptionalParam($params, "kshow_id", $kshowId);

		$result = $this->hit("deleteentry", $borhanSessionUser, $params);
		return $result;
	}

	public function deleteKShow(BorhanSessionUser $borhanSessionUser, $kshowId)
	{
		$params = array();
		$params["kshow_id"] = $kshowId;

		$result = $this->hit("deletekshow", $borhanSessionUser, $params);
		return $result;
	}

	public function deleteUser(BorhanSessionUser $borhanSessionUser, $userId)
	{
		$params = array();
		$params["user_id"] = $userId;

		$result = $this->hit("deleteuser", $borhanSessionUser, $params);
		return $result;
	}

	public function getAllEntries(BorhanSessionUser $borhanSessionUser, $entryId, $kshowId, $listType = null, $version = null)
	{
		$params = array();
		$params["entry_id"] = $entryId;
		$params["kshow_id"] = $kshowId;
		$this->addOptionalParam($params, "list_type", $listType);
		$this->addOptionalParam($params, "version", $version);

		$result = $this->hit("getallentries", $borhanSessionUser, $params);
		return $result;
	}

	public function getDvdEntry(BorhanSessionUser $borhanSessionUser, $dvdEntryId, $detailed = null)
	{
		$params = array();
		$params["dvdEntry_id"] = $dvdEntryId;
		$this->addOptionalParam($params, "detailed", $detailed);

		$result = $this->hit("getdvdentry", $borhanSessionUser, $params);
		return $result;
	}

	public function getEntries(BorhanSessionUser $borhanSessionUser, $entryIds, $separator = ",", $detailed = null)
	{
		$params = array();
		$params["entry_ids"] = $entryIds;
		$this->addOptionalParam($params, "separator", $separator);
		$this->addOptionalParam($params, "detailed", $detailed);

		$result = $this->hit("getentries", $borhanSessionUser, $params);
		return $result;
	}

	public function getEntry(BorhanSessionUser $borhanSessionUser, $entryId, $detailed = null, $version = null)
	{
		$params = array();
		$params["entry_id"] = $entryId;
		$this->addOptionalParam($params, "detailed", $detailed);
		$this->addOptionalParam($params, "version", $version);

		$result = $this->hit("getentry", $borhanSessionUser, $params);
		return $result;
	}

	public function getKShow(BorhanSessionUser $borhanSessionUser, $kshowId, $detailed = null)
	{
		$params = array();
		$params["kshow_id"] = $kshowId;
		$this->addOptionalParam($params, "detailed", $detailed);

		$result = $this->hit("getkshow", $borhanSessionUser, $params);
		return $result;
	}

	public function getLastVersionsInfo(BorhanSessionUser $borhanSessionUser, $kshowId)
	{
		$params = array();
		$params["kshow_id"] = $kshowId;

		$result = $this->hit("getlastversionsinfo", $borhanSessionUser, $params);
		return $result;
	}

	public function getMetaDataAction(BorhanSessionUser $borhanSessionUser, $entryId, $kshowId, $version)
	{
		$params = array();
		$params["entry_id"] = $entryId;
		$params["kshow_id"] = $kshowId;
		$params["version"] = $version;

		$result = $this->hit("getmetadata", $borhanSessionUser, $params);
		return $result;
	}

	public function getPartner(BorhanSessionUser $borhanSessionUser, $partnerAdminEmail, $cmsPassword, $partnerId)
	{
		$params = array();
		$params["partner_adminEmail"] = $partnerAdminEmail;
		$params["cms_password"] = $cmsPassword;
		$params["partner_id"] = $partnerId;

		$result = $this->hit("getpartner", $borhanSessionUser, $params);
		return $result;
	}

	public function getThumbnail(BorhanSessionUser $borhanSessionUser, $filename)
	{
		$params = array();
		$params["filename"] = $filename;

		$result = $this->hit("getthumbnail", $borhanSessionUser, $params);
		return $result;
	}

	public function getUIConf(BorhanSessionUser $borhanSessionUser, $uiConfId, $detailed = null)
	{
		$params = array();
		$params["ui_conf_id"] = $uiConfId;
		$this->addOptionalParam($params, "detailed", $detailed);

		$result = $this->hit("getuiconf", $borhanSessionUser, $params);
		return $result;
	}

	public function getUser(BorhanSessionUser $borhanSessionUser, $userId, $detailed = null)
	{
		$params = array();
		$params["user_id"] = $userId;
		$this->addOptionalParam($params, "detailed", $detailed);

		$result = $this->hit("getuser", $borhanSessionUser, $params);
		return $result;
	}

	public function getWidget(BorhanSessionUser $borhanSessionUser, $widgetId, $detailed = null)
	{
		$params = array();
		$params["widget_id"] = $widgetId;
		$this->addOptionalParam($params, "detailed", $detailed);

		$result = $this->hit("getwidget", $borhanSessionUser, $params);
		return $result;
	}

	public function handleModeration(BorhanSessionUser $borhanSessionUser, $moderationId, $moderationStatus)
	{
		$params = array();
		$params["moderation_id"] = $moderationId;
		$params["moderation_status"] = $moderationStatus;

		$result = $this->hit("handlemoderation", $borhanSessionUser, $params);
		return $result;
	}

	public function listDvdEntries(BorhanSessionUser $borhanSessionUser, BorhanEntryFilter $filter, $detailed = null, $pageSize = 10, $page = 1, $useFilterPuserId = null)
	{
		$params = array();
		$this->addOptionalParam($params, "filter__eq_user_id", $filter->equalUserId);
		$this->addOptionalParam($params, "filter__eq_kshow_id", $filter->equalKshowId);
		$this->addOptionalParam($params, "filter__eq_type", $filter->equalType);
		$this->addOptionalParam($params, "filter__in_type", $filter->inType);
		$this->addOptionalParam($params, "filter__eq_media_type", $filter->equalMediaType);
		$this->addOptionalParam($params, "filter__in_media_type", $filter->inMediaType);
		$this->addOptionalParam($params, "filter__eq_indexed_custom_data_1", $filter->equalIndexedCustomData);
		$this->addOptionalParam($params, "filter__in_indexed_custom_data_1", $filter->inIndexedCustomData);
		$this->addOptionalParam($params, "filter__like_name", $filter->likeName);
		$this->addOptionalParam($params, "filter__eq_group_id", $filter->equalGroupId);
		$this->addOptionalParam($params, "filter__gte_views", $filter->greaterThanOrEqualViews);
		$this->addOptionalParam($params, "filter__gte_created_at", $filter->greaterThanOrEqualCreatedAt);
		$this->addOptionalParam($params, "filter__lte_created_at", $filter->lessThanOrEqualCreatedAt);
		$this->addOptionalParam($params, "filter__in_partner_id", $filter->inPartnerId);
		$this->addOptionalParam($params, "filter__eq_partner_id", $filter->equalPartnerId);
		$this->addOptionalParam($params, "filter__order_by", $filter->orderBy);
		$this->addOptionalParam($params, "detailed", $detailed);
		$this->addOptionalParam($params, "page_size", $pageSize);
		$this->addOptionalParam($params, "page", $page);
		$this->addOptionalParam($params, "use_filter_puser_id", $useFilterPuserId);

		$result = $this->hit("listdvdentries", $borhanSessionUser, $params);
		return $result;
	}

	public function listEntries(BorhanSessionUser $borhanSessionUser, BorhanEntryFilter $filter, $detailed = null, $pageSize = 10, $page = 1, $useFilterPuserId = null)
	{
		$params = array();
		$this->addOptionalParam($params, "filter__eq_user_id", $filter->equalUserId);
		$this->addOptionalParam($params, "filter__eq_kshow_id", $filter->equalKshowId);
		$this->addOptionalParam($params, "filter__eq_type", $filter->equalType);
		$this->addOptionalParam($params, "filter__in_type", $filter->inType);
		$this->addOptionalParam($params, "filter__eq_media_type", $filter->equalMediaType);
		$this->addOptionalParam($params, "filter__in_media_type", $filter->inMediaType);
		$this->addOptionalParam($params, "filter__eq_indexed_custom_data_1", $filter->equalIndexedCustomData);
		$this->addOptionalParam($params, "filter__in_indexed_custom_data_1", $filter->inIndexedCustomData);
		$this->addOptionalParam($params, "filter__like_name", $filter->likeName);
		$this->addOptionalParam($params, "filter__eq_group_id", $filter->equalGroupId);
		$this->addOptionalParam($params, "filter__gte_views", $filter->greaterThanOrEqualViews);
		$this->addOptionalParam($params, "filter__gte_created_at", $filter->greaterThanOrEqualCreatedAt);
		$this->addOptionalParam($params, "filter__lte_created_at", $filter->lessThanOrEqualCreatedAt);
		$this->addOptionalParam($params, "filter__in_partner_id", $filter->inPartnerId);
		$this->addOptionalParam($params, "filter__eq_partner_id", $filter->equalPartnerId);
		$this->addOptionalParam($params, "filter__order_by", $filter->orderBy);
		$this->addOptionalParam($params, "detailed", $detailed);
		$this->addOptionalParam($params, "page_size", $pageSize);
		$this->addOptionalParam($params, "page", $page);
		$this->addOptionalParam($params, "use_filter_puser_id", $useFilterPuserId);

		$result = $this->hit("listentries", $borhanSessionUser, $params);
		return $result;
	}

	public function listKShows(BorhanSessionUser $borhanSessionUser, BorhanKShowFilter $filter, $detailed = null, $pageSize = 10, $page = 1, $useFilterPuserId = null)
	{
		$params = array();
		$this->addOptionalParam($params, "filter__gte_views", $filter->greaterThanOrEqualViews);
		$this->addOptionalParam($params, "filter__eq_type", $filter->equalType);
		$this->addOptionalParam($params, "filter__eq_producer_id", $filter->equalProducerId);
		$this->addOptionalParam($params, "filter__gte_created_at", $filter->greaterThanOrEqualCreatedAt);
		$this->addOptionalParam($params, "filter__lte_created_at", $filter->lessThanOrEqualCreatedAt);
		$this->addOptionalParam($params, "filter__order_by", $filter->orderBy);
		$this->addOptionalParam($params, "detailed", $detailed);
		$this->addOptionalParam($params, "page_size", $pageSize);
		$this->addOptionalParam($params, "page", $page);
		$this->addOptionalParam($params, "use_filter_puser_id", $useFilterPuserId);

		$result = $this->hit("listkshows", $borhanSessionUser, $params);
		return $result;
	}

	public function listModerations(BorhanSessionUser $borhanSessionUser, BorhanModerationFilter $filter, $detailed = null, $pageSize = 10, $page = 1)
	{
		$params = array();
		$this->addOptionalParam($params, "filter__eq_id", $filter->equalId);
		$this->addOptionalParam($params, "filter__eq_puser_id", $filter->equalPuserId);
		$this->addOptionalParam($params, "filter__eq_status", $filter->equalStatus);
		$this->addOptionalParam($params, "filter__like_comments", $filter->likeComments);
		$this->addOptionalParam($params, "filter__eq_object_id", $filter->equalObjectId);
		$this->addOptionalParam($params, "filter__eq_object_type", $filter->equalObjectType);
		$this->addOptionalParam($params, "filter__eq_group_id", $filter->equalGroupId);
		$this->addOptionalParam($params, "filter__order_by", $filter->orderBy);
		$this->addOptionalParam($params, "detailed", $detailed);
		$this->addOptionalParam($params, "page_size", $pageSize);
		$this->addOptionalParam($params, "page", $page);

		$result = $this->hit("listmoderations", $borhanSessionUser, $params);
		return $result;
	}

	public function listMyDvdEntries(BorhanSessionUser $borhanSessionUser, BorhanEntryFilter $filter, $detailed = null, $pageSize = 10, $page = 1, $useFilterPuserId = null)
	{
		$params = array();
		$this->addOptionalParam($params, "filter__eq_user_id", $filter->equalUserId);
		$this->addOptionalParam($params, "filter__eq_kshow_id", $filter->equalKshowId);
		$this->addOptionalParam($params, "filter__eq_type", $filter->equalType);
		$this->addOptionalParam($params, "filter__in_type", $filter->inType);
		$this->addOptionalParam($params, "filter__eq_media_type", $filter->equalMediaType);
		$this->addOptionalParam($params, "filter__in_media_type", $filter->inMediaType);
		$this->addOptionalParam($params, "filter__eq_indexed_custom_data_1", $filter->equalIndexedCustomData);
		$this->addOptionalParam($params, "filter__in_indexed_custom_data_1", $filter->inIndexedCustomData);
		$this->addOptionalParam($params, "filter__like_name", $filter->likeName);
		$this->addOptionalParam($params, "filter__eq_group_id", $filter->equalGroupId);
		$this->addOptionalParam($params, "filter__gte_views", $filter->greaterThanOrEqualViews);
		$this->addOptionalParam($params, "filter__gte_created_at", $filter->greaterThanOrEqualCreatedAt);
		$this->addOptionalParam($params, "filter__lte_created_at", $filter->lessThanOrEqualCreatedAt);
		$this->addOptionalParam($params, "filter__in_partner_id", $filter->inPartnerId);
		$this->addOptionalParam($params, "filter__eq_partner_id", $filter->equalPartnerId);
		$this->addOptionalParam($params, "filter__order_by", $filter->orderBy);
		$this->addOptionalParam($params, "detailed", $detailed);
		$this->addOptionalParam($params, "page_size", $pageSize);
		$this->addOptionalParam($params, "page", $page);
		$this->addOptionalParam($params, "use_filter_puser_id", $useFilterPuserId);

		$result = $this->hit("listmydvdentries", $borhanSessionUser, $params);
		return $result;
	}

	public function listMyEntries(BorhanSessionUser $borhanSessionUser, BorhanEntryFilter $filter, $detailed = null, $pageSize = 10, $page = 1, $useFilterPuserId = null)
	{
		$params = array();
		$this->addOptionalParam($params, "filter__eq_user_id", $filter->equalUserId);
		$this->addOptionalParam($params, "filter__eq_kshow_id", $filter->equalKshowId);
		$this->addOptionalParam($params, "filter__eq_type", $filter->equalType);
		$this->addOptionalParam($params, "filter__in_type", $filter->inType);
		$this->addOptionalParam($params, "filter__eq_media_type", $filter->equalMediaType);
		$this->addOptionalParam($params, "filter__in_media_type", $filter->inMediaType);
		$this->addOptionalParam($params, "filter__eq_indexed_custom_data_1", $filter->equalIndexedCustomData);
		$this->addOptionalParam($params, "filter__in_indexed_custom_data_1", $filter->inIndexedCustomData);
		$this->addOptionalParam($params, "filter__like_name", $filter->likeName);
		$this->addOptionalParam($params, "filter__eq_group_id", $filter->equalGroupId);
		$this->addOptionalParam($params, "filter__gte_views", $filter->greaterThanOrEqualViews);
		$this->addOptionalParam($params, "filter__gte_created_at", $filter->greaterThanOrEqualCreatedAt);
		$this->addOptionalParam($params, "filter__lte_created_at", $filter->lessThanOrEqualCreatedAt);
		$this->addOptionalParam($params, "filter__in_partner_id", $filter->inPartnerId);
		$this->addOptionalParam($params, "filter__eq_partner_id", $filter->equalPartnerId);
		$this->addOptionalParam($params, "filter__order_by", $filter->orderBy);
		$this->addOptionalParam($params, "detailed", $detailed);
		$this->addOptionalParam($params, "page_size", $pageSize);
		$this->addOptionalParam($params, "page", $page);
		$this->addOptionalParam($params, "use_filter_puser_id", $useFilterPuserId);

		$result = $this->hit("listmyentries", $borhanSessionUser, $params);
		return $result;
	}

	public function listMyKShows(BorhanSessionUser $borhanSessionUser, BorhanKShowFilter $filter, $detailed = null, $pageSize = 10, $page = 1, $useFilterPuserId = null)
	{
		$params = array();
		$this->addOptionalParam($params, "filter__gte_views", $filter->greaterThanOrEqualViews);
		$this->addOptionalParam($params, "filter__eq_type", $filter->equalType);
		$this->addOptionalParam($params, "filter__eq_producer_id", $filter->equalProducerId);
		$this->addOptionalParam($params, "filter__gte_created_at", $filter->greaterThanOrEqualCreatedAt);
		$this->addOptionalParam($params, "filter__lte_created_at", $filter->lessThanOrEqualCreatedAt);
		$this->addOptionalParam($params, "filter__order_by", $filter->orderBy);
		$this->addOptionalParam($params, "detailed", $detailed);
		$this->addOptionalParam($params, "page_size", $pageSize);
		$this->addOptionalParam($params, "page", $page);
		$this->addOptionalParam($params, "use_filter_puser_id", $useFilterPuserId);

		$result = $this->hit("listmykshows", $borhanSessionUser, $params);
		return $result;
	}

	public function listNotifications(BorhanSessionUser $borhanSessionUser, BorhanNotificationFilter $filter, $pageSize = 10, $page = 1)
	{
		$params = array();
		$this->addOptionalParam($params, "filter__eq_id", $filter->equalId);
		$this->addOptionalParam($params, "filter__gte_id", $filter->greaterThanOrEqualId);
		$this->addOptionalParam($params, "filter__eq_status", $filter->equalStatus);
		$this->addOptionalParam($params, "filter__eq_type", $filter->equalType);
		$this->addOptionalParam($params, "filter__order_by", $filter->orderBy);
		$this->addOptionalParam($params, "page_size", $pageSize);
		$this->addOptionalParam($params, "page", $page);

		$result = $this->hit("listnotifications", $borhanSessionUser, $params);
		return $result;
	}

	public function listPartnerEntries(BorhanSessionUser $borhanSessionUser, BorhanEntryFilter $filter, $detailed = null, $pageSize = 10, $page = 1, $useFilterPuserId = null)
	{
		$params = array();
		$this->addOptionalParam($params, "filter__eq_user_id", $filter->equalUserId);
		$this->addOptionalParam($params, "filter__eq_kshow_id", $filter->equalKshowId);
		$this->addOptionalParam($params, "filter__eq_type", $filter->equalType);
		$this->addOptionalParam($params, "filter__in_type", $filter->inType);
		$this->addOptionalParam($params, "filter__eq_media_type", $filter->equalMediaType);
		$this->addOptionalParam($params, "filter__in_media_type", $filter->inMediaType);
		$this->addOptionalParam($params, "filter__eq_indexed_custom_data_1", $filter->equalIndexedCustomData);
		$this->addOptionalParam($params, "filter__in_indexed_custom_data_1", $filter->inIndexedCustomData);
		$this->addOptionalParam($params, "filter__like_name", $filter->likeName);
		$this->addOptionalParam($params, "filter__eq_group_id", $filter->equalGroupId);
		$this->addOptionalParam($params, "filter__gte_views", $filter->greaterThanOrEqualViews);
		$this->addOptionalParam($params, "filter__gte_created_at", $filter->greaterThanOrEqualCreatedAt);
		$this->addOptionalParam($params, "filter__lte_created_at", $filter->lessThanOrEqualCreatedAt);
		$this->addOptionalParam($params, "filter__in_partner_id", $filter->inPartnerId);
		$this->addOptionalParam($params, "filter__eq_partner_id", $filter->equalPartnerId);
		$this->addOptionalParam($params, "filter__order_by", $filter->orderBy);
		$this->addOptionalParam($params, "detailed", $detailed);
		$this->addOptionalParam($params, "page_size", $pageSize);
		$this->addOptionalParam($params, "page", $page);
		$this->addOptionalParam($params, "use_filter_puser_id", $useFilterPuserId);

		$result = $this->hit("listpartnerentries", $borhanSessionUser, $params);
		return $result;
	}

	public function rankKShow(BorhanSessionUser $borhanSessionUser, $kshowId, $rank, $pageSize = 10, $page = 1)
	{
		$params = array();
		$params["kshow_id"] = $kshowId;
		$params["rank"] = $rank;
		$this->addOptionalParam($params, "page_size", $pageSize);
		$this->addOptionalParam($params, "page", $page);

		$result = $this->hit("rankkshow", $borhanSessionUser, $params);
		return $result;
	}

	public function registerPartner(BorhanSessionUser $borhanSessionUser, BorhanPartner $partner, $cmsPassword = null)
	{
		$params = array();
		$this->addOptionalParam($params, "partner_name", $partner->name);
		$this->addOptionalParam($params, "partner_url1", $partner->url1);
		$this->addOptionalParam($params, "partner_url2", $partner->url2);
		$this->addOptionalParam($params, "partner_appearInSearch", $partner->appearInSearch);
		$this->addOptionalParam($params, "partner_adminName", $partner->adminName);
		$this->addOptionalParam($params, "partner_adminEmail", $partner->adminEmail);
		$this->addOptionalParam($params, "partner_description", $partner->description);
		$this->addOptionalParam($params, "partner_commercialUse", $partner->commercialUse);
		$this->addOptionalParam($params, "cms_password", $cmsPassword);

		$result = $this->hit("registerpartner", $borhanSessionUser, $params);
		return $result;
	}

	public function reportEntry(BorhanSessionUser $borhanSessionUser, BorhanModeration $moderation)
	{
		$params = array();
		$this->addOptionalParam($params, "moderation_comments", $moderation->comments);
		$this->addOptionalParam($params, "moderation_objectType", $moderation->objectType);
		$this->addOptionalParam($params, "moderation_objectId", $moderation->objectId);

		$result = $this->hit("reportentry", $borhanSessionUser, $params);
		return $result;
	}

	public function reportKShow(BorhanSessionUser $borhanSessionUser, BorhanModeration $moderation)
	{
		$params = array();
		$this->addOptionalParam($params, "moderation_comments", $moderation->comments);
		$this->addOptionalParam($params, "moderation_objectType", $moderation->objectType);
		$this->addOptionalParam($params, "moderation_objectId", $moderation->objectId);

		$result = $this->hit("reportkshow", $borhanSessionUser, $params);
		return $result;
	}

	public function rollbackKShow(BorhanSessionUser $borhanSessionUser, $kshowId, $kshowVersion)
	{
		$params = array();
		$params["kshow_id"] = $kshowId;
		$params["kshow_version"] = $kshowVersion;

		$result = $this->hit("rollbackkshow", $borhanSessionUser, $params);
		return $result;
	}

	public function search(BorhanSessionUser $borhanSessionUser, $mediaType, $mediaSource, $search, $authData, $page = 1, $pageSize = 10)
	{
		$params = array();
		$params["media_type"] = $mediaType;
		$params["media_source"] = $mediaSource;
		$params["search"] = $search;
		$params["auth_data"] = $authData;
		$this->addOptionalParam($params, "page", $page);
		$this->addOptionalParam($params, "page_size", $pageSize);

		$result = $this->hit("search", $borhanSessionUser, $params);
		return $result;
	}

	public function searchAuthData(BorhanSessionUser $borhanSessionUser, $mediaSource, $username, $password)
	{
		$params = array();
		$params["media_source"] = $mediaSource;
		$params["username"] = $username;
		$params["password"] = $password;

		$result = $this->hit("searchauthdata", $borhanSessionUser, $params);
		return $result;
	}

	public function searchFromUrl(BorhanSessionUser $borhanSessionUser, $url, $mediaType)
	{
		$params = array();
		$params["url"] = $url;
		$params["media_type"] = $mediaType;

		$result = $this->hit("searchfromurl", $borhanSessionUser, $params);
		return $result;
	}

	public function searchMediaInfo(BorhanSessionUser $borhanSessionUser)
	{
		$params = array();

		$result = $this->hit("searchmediainfo", $borhanSessionUser, $params);
		return $result;
	}

	public function searchmediaproviders(BorhanSessionUser $borhanSessionUser)
	{
		$params = array();

		$result = $this->hit("searchmediaproviders", $borhanSessionUser, $params);
		return $result;
	}

	public function setMetaData(BorhanSessionUser $borhanSessionUser, $entryId, $kshowId, $hasRoughCut, $xml)
	{
		$params = array();
		$params["entry_id"] = $entryId;
		$params["kshow_id"] = $kshowId;
		$params["HasRoughCut"] = $hasRoughCut;
		$params["xml"] = $xml;

		$result = $this->hit("setmetadata", $borhanSessionUser, $params);
		return $result;
	}

	public function startSession(BorhanSessionUser $borhanSessionUser, $secret, $admin = null, $privileges = null, $expiry = 86400)
	{
		$params = array();
		$params["secret"] = $secret;
		$this->addOptionalParam($params, "admin", $admin);
		$this->addOptionalParam($params, "privileges", $privileges);
		$this->addOptionalParam($params, "expiry", $expiry);

		$result = $this->hit("startsession", $borhanSessionUser, $params);
		return $result;
	}

	public function startWidgetSession(BorhanSessionUser $borhanSessionUser, $widgetId, $expiry = 86400)
	{
		$params = array();
		$params["widget_id"] = $widgetId;
		$this->addOptionalParam($params, "expiry", $expiry);

		$result = $this->hit("startwidgetsession", $borhanSessionUser, $params);
		return $result;
	}

	public function updateDvdEntry(BorhanSessionUser $borhanSessionUser, $entryId, BorhanEntry $entry)
	{
		$params = array();
		$params["entry_id"] = $entryId;
		$this->addOptionalParam($params, "entry_name", $entry->name);
		$this->addOptionalParam($params, "entry_tags", $entry->tags);
		$this->addOptionalParam($params, "entry_type", $entry->type);
		$this->addOptionalParam($params, "entry_mediaType", $entry->mediaType);
		$this->addOptionalParam($params, "entry_source", $entry->source);
		$this->addOptionalParam($params, "entry_sourceId", $entry->sourceId);
		$this->addOptionalParam($params, "entry_sourceLink", $entry->sourceLink);
		$this->addOptionalParam($params, "entry_licenseType", $entry->licenseType);
		$this->addOptionalParam($params, "entry_credit", $entry->credit);
		$this->addOptionalParam($params, "entry_groupId", $entry->groupId);
		$this->addOptionalParam($params, "entry_partnerData", $entry->partnerData);
		$this->addOptionalParam($params, "entry_conversionQuality", $entry->conversionQuality);
		$this->addOptionalParam($params, "entry_permissions", $entry->permissions);
		$this->addOptionalParam($params, "entry_dataContent", $entry->dataContent);
		$this->addOptionalParam($params, "entry_desiredVersion", $entry->desiredVersion);
		$this->addOptionalParam($params, "entry_url", $entry->url);
		$this->addOptionalParam($params, "entry_thumbUrl", $entry->thumbUrl);
		$this->addOptionalParam($params, "entry_filename", $entry->filename);
		$this->addOptionalParam($params, "entry_realFilename", $entry->realFilename);
		$this->addOptionalParam($params, "entry_indexedCustomData1", $entry->indexedCustomData1);
		$this->addOptionalParam($params, "entry_thumbOffset", $entry->thumbOffset);

		$result = $this->hit("updatedvdentry", $borhanSessionUser, $params);
		return $result;
	}

	public function updateEntriesThumbnails(BorhanSessionUser $borhanSessionUser, $entryIds, $timeOffset)
	{
		$params = array();
		$params["entry_ids"] = $entryIds;
		$params["time_offset"] = $timeOffset;

		$result = $this->hit("updateentriesthumbnails", $borhanSessionUser, $params);
		return $result;
	}

	public function updateEntry(BorhanSessionUser $borhanSessionUser, $entryId, BorhanEntry $entry)
	{
		$params = array();
		$params["entry_id"] = $entryId;
		$this->addOptionalParam($params, "entry_name", $entry->name);
		$this->addOptionalParam($params, "entry_tags", $entry->tags);
		$this->addOptionalParam($params, "entry_type", $entry->type);
		$this->addOptionalParam($params, "entry_mediaType", $entry->mediaType);
		$this->addOptionalParam($params, "entry_source", $entry->source);
		$this->addOptionalParam($params, "entry_sourceId", $entry->sourceId);
		$this->addOptionalParam($params, "entry_sourceLink", $entry->sourceLink);
		$this->addOptionalParam($params, "entry_licenseType", $entry->licenseType);
		$this->addOptionalParam($params, "entry_credit", $entry->credit);
		$this->addOptionalParam($params, "entry_groupId", $entry->groupId);
		$this->addOptionalParam($params, "entry_partnerData", $entry->partnerData);
		$this->addOptionalParam($params, "entry_conversionQuality", $entry->conversionQuality);
		$this->addOptionalParam($params, "entry_permissions", $entry->permissions);
		$this->addOptionalParam($params, "entry_dataContent", $entry->dataContent);
		$this->addOptionalParam($params, "entry_desiredVersion", $entry->desiredVersion);
		$this->addOptionalParam($params, "entry_url", $entry->url);
		$this->addOptionalParam($params, "entry_thumbUrl", $entry->thumbUrl);
		$this->addOptionalParam($params, "entry_filename", $entry->filename);
		$this->addOptionalParam($params, "entry_realFilename", $entry->realFilename);
		$this->addOptionalParam($params, "entry_indexedCustomData1", $entry->indexedCustomData1);
		$this->addOptionalParam($params, "entry_thumbOffset", $entry->thumbOffset);

		$result = $this->hit("updateentry", $borhanSessionUser, $params);
		return $result;
	}

	public function updateEntryThumbnail(BorhanSessionUser $borhanSessionUser, $entryId, $sourceEntryId = null, $timeOffset = null)
	{
		$params = array();
		$params["entry_id"] = $entryId;
		$this->addOptionalParam($params, "source_entry_id", $sourceEntryId);
		$this->addOptionalParam($params, "time_offset", $timeOffset);

		$result = $this->hit("updateentrythumbnail", $borhanSessionUser, $params);
		return $result;
	}

	public function updateEntryThumbnailJpeg(BorhanSessionUser $borhanSessionUser, $entryId)
	{
		$params = array();
		$params["entry_id"] = $entryId;

		$result = $this->hit("updateentrythumbnailjpeg", $borhanSessionUser, $params);
		return $result;
	}

	public function updateKShow(BorhanSessionUser $borhanSessionUser, $kshowId, BorhanKShow $kshow, $detailed = null, $allowDuplicateNames = null)
	{
		$params = array();
		$params["kshow_id"] = $kshowId;
		$this->addOptionalParam($params, "kshow_name", $kshow->name);
		$this->addOptionalParam($params, "kshow_description", $kshow->description);
		$this->addOptionalParam($params, "kshow_tags", $kshow->tags);
		$this->addOptionalParam($params, "kshow_indexedCustomData3", $kshow->indexedCustomData3);
		$this->addOptionalParam($params, "kshow_groupId", $kshow->groupId);
		$this->addOptionalParam($params, "kshow_permissions", $kshow->permissions);
		$this->addOptionalParam($params, "kshow_partnerData", $kshow->partnerData);
		$this->addOptionalParam($params, "kshow_allowQuickEdit", $kshow->allowQuickEdit);
		$this->addOptionalParam($params, "detailed", $detailed);
		$this->addOptionalParam($params, "allow_duplicate_names", $allowDuplicateNames);

		$result = $this->hit("updatekshow", $borhanSessionUser, $params);
		return $result;
	}

	public function updateKshowOwner(BorhanSessionUser $borhanSessionUser, $kshowId, $detailed = null)
	{
		$params = array();
		$params["kshow_id"] = $kshowId;
		$this->addOptionalParam($params, "detailed", $detailed);

		$result = $this->hit("updatekshowowner", $borhanSessionUser, $params);
		return $result;
	}

	public function updateNotification(BorhanSessionUser $borhanSessionUser, BorhanNotification $notification)
	{
		$params = array();
		$this->addOptionalParam($params, "notification_id", $notification->id);
		$this->addOptionalParam($params, "notification_status", $notification->status);
		$this->addOptionalParam($params, "notification_notificationResult", $notification->notificationResult);

		$result = $this->hit("updatenotification", $borhanSessionUser, $params);
		return $result;
	}

	public function updateUser(BorhanSessionUser $borhanSessionUser, $userId, BorhanUser $user)
	{
		$params = array();
		$params["user_id"] = $userId;
		$this->addOptionalParam($params, "user_screenName", $user->screenName);
		$this->addOptionalParam($params, "user_fullName", $user->fullName);
		$this->addOptionalParam($params, "user_email", $user->email);
		$this->addOptionalParam($params, "user_dateOfBirth", $user->dateOfBirth);
		$this->addOptionalParam($params, "user_aboutMe", $user->aboutMe);
		$this->addOptionalParam($params, "user_tags", $user->tags);
		$this->addOptionalParam($params, "user_gender", $user->gender);
		$this->addOptionalParam($params, "user_country", $user->country);
		$this->addOptionalParam($params, "user_state", $user->state);
		$this->addOptionalParam($params, "user_city", $user->city);
		$this->addOptionalParam($params, "user_zip", $user->zip);
		$this->addOptionalParam($params, "user_urlList", $user->urlList);
		$this->addOptionalParam($params, "user_networkHighschool", $user->networkHighschool);
		$this->addOptionalParam($params, "user_networkCollege", $user->networkCollege);
		$this->addOptionalParam($params, "user_partnerData", $user->partnerData);

		$result = $this->hit("updateuser", $borhanSessionUser, $params);
		return $result;
	}

	public function updateUserId(BorhanSessionUser $borhanSessionUser, $userId, $newUserId)
	{
		$params = array();
		$params["user_id"] = $userId;
		$params["new_user_id"] = $newUserId;

		$result = $this->hit("updateuserid", $borhanSessionUser, $params);
		return $result;
	}

	public function upload(BorhanSessionUser $borhanSessionUser, $filename)
	{
		$params = array();
		$params["filename"] = $filename;

		$result = $this->hit("upload", $borhanSessionUser, $params);
		return $result;
	}

	public function uploadJpeg(BorhanSessionUser $borhanSessionUser, $filename, $hash)
	{
		$params = array();
		$params["filename"] = $filename;
		$params["hash"] = $hash;

		$result = $this->hit("uploadjpeg", $borhanSessionUser, $params);
		return $result;
	}

	public function viewWidget(BorhanSessionUser $borhanSessionUser, $entryId = null, $kshowId = null, $widgetId = null, $host = null)
	{
		$params = array();
		$this->addOptionalParam($params, "entry_id", $entryId);
		$this->addOptionalParam($params, "kshow_id", $kshowId);
		$this->addOptionalParam($params, "widget_id", $widgetId);
		$this->addOptionalParam($params, "host", $host);

		$result = $this->hit("viewwidget", $borhanSessionUser, $params);
		return $result;
	}

}
?>
