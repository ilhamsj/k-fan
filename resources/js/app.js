
require('./bootstrap');
require('datatables.net-bs4');
require('datatables.net-buttons');
require('datatables.net-buttons-bs4');
require('datatables.net-buttons/js/buttons.colVis.js');
require('datatables.net-buttons/js/buttons.html5.js'); 
require('datatables.net-buttons/js/buttons.flash.js');
require('datatables.net-buttons/js/buttons.print.js');
var pdfMake = require('pdfmake/build/pdfmake.js');
var pdfFonts = require('pdfmake/build/vfs_fonts.js');
pdfMake.vfs = pdfFonts.pdfMake.vfs;

import jsZip from 'jszip';
window.JSZip = jsZip;
