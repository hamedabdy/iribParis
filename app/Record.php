<?php

namespace App;

class Record {

	protected int $id;
	protected int $global_id;
	protected int $item_id;
	protected string $title;
	protected string $date;
	protected string $date_shamsi;
	protected boolean $report;
	protected boolean $rush;
	protected boolean $monitoring;
	protected boolean $sent;
	protected string $description;

	public function Record() {
		// Empty constructor
	}

	public function Record(int $id, int $global_id, int $item_id, string $title, string $date, string $date_shamsi, boolean $report, boolean $rush, boolean $monitoring, boolean $sent, string $description) {
		this->id = $id;
		this->global_id = $global_id;
		this->item_id = $item_id;
		this->title = $title;
		this->date = $date;
		this->date_shamsi = $date_shamsi;
		this->report = $report;
		this->rush = $rush;
		this->monitoring = $monitoring;
		this->sent = $sent;
		this->description = $description;
	}

	public int function getId(){
		return this->id;
	}

	public function setId(int $id) {
		this->id = $id;
	}

	public int function getGlobal_id() {
		return this->global_id;
	}

	public function setGlobal_id(int $global_id) {
		this->global_id = $global_id;
	}

	public int function getItem_id() {
		return this->item_id;
	}

	public function setItem_id(int $item_id) {
		this->item_id = $item_id;
	}

	public string function getTitle() {
		return this->title;
	}

	public function setTitle(string $title) {
		this->title = $title;
	}

	public string function getDate() {
		return this->date;
	}

	public function setDate(string $date) {
		this->date = $date;
	}

	public string function getDate_shamsi() {
		return this->date_shamsi;
	}

	public function setDate_shamsi(string $date_shamsi) {
		this->date_shamsi = $date_shamsi;
	}

	public boolean function getReport() {
		return this->report;
	}

	public function setReport(boolean $report) {
		this->report = $report;
	}

	public boolean function getRush() {
		return this->rush;
	}

	public function setRush(boolean $rush) {
		this->rush = $rush;
	}

	public boolean function getMonitoring() {
		return this->monitoring;
	}

	public function setMonitoring(boolean $monitoring) {
		this->monitoring = $monitoring;
	}

	public boolean function getSent() {
		return this->sent;
	}

	public function setSent(boolean $sent) {
		this->sent = $sent;
	}

	public string function getDescription() {
		return this->description;
	}

	public function setDescription(string $description) {
		this->description = $description;
	}

}

?>