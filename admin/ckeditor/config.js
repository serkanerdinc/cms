/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'tr';
	config.uiColor = '#FBFBFB';
	config.filebrowserBrowseUrl = '/admin/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = '/admin/ckfinder/ckfinder.html?Type=Images';
	config.filebrowserFlashBrowseUrl = '/admin/ckfinder/ckfinder.html?Type=Flash';
	config.filebrowserUploadUrl = '/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type;=Files';
	config.filebrowserImageUploadUrl = '/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type;=Images';
	config.enterMode = CKEDITOR.ENTER_BR; 
	config.shiftEnterMode = CKEDITOR.ENTER_BR; 
};
