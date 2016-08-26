const cloudinary = require('cloudinary');
const replace = require("replace");
const program = require('commander');

cloudinary.config({
    cloud_name: 'big-cabal',
    api_key: '122125953429187',
    api_secret: 'F0lC8UhoJaGnJGDufpTSSp5hdgw'
});

/* -----------------------------
    Functions
 -----------------------------*/

function replaceText(regex, replacement, paths) {
    replace({
        regex: regex,
        replacement: replacement,
        paths: paths,
        recursive: true,
        silent: true,
    });
}

function uploadToCloudinary(file, options) {
    return new Promise(function(resolve, reject) {
        cloudinary.v2.uploader.upload(file, options, (error, result) => {
            resolve(result);
        });
    })
}

function displayMessage(message, type) {
    switch (type) {
        case 'h1':
            console.log(`
====================
   ${message}
====================`);
            break;

        case 'li':
            console.log(`- ${message}`);
            break;

        default:
            console.log(message);
            break;

    }
}


/* -----------------------------
        Tasks
 -----------------------------*/

function cssTask() {

    displayMessage('Task - CSS', 'h1');

    function updateStylesheetLink(newStylesheetLink) {
        const reg = /https:\/\/res\.cloudinary\.com(.*)css/;
        replaceText(reg, newStylesheetLink, ['header.php']);
        displayMessage('Stylesheet link updated in header.php', 'li');
    }
    const stylesheet = 'style.css';
    const options = {
        resource_type: 'raw',
        folder: 'zikoko-static-assets',
        public_id: 'zikoko-stylesheet-v1'
    };

    displayMessage('Uploading stylesheet to Cloudinary', 'li');
    uploadToCloudinary(stylesheet, options).then((result) => {
        displayMessage('Stylesheet successfully uploaded. Details below.', 'li');
        console.log(result);
        updateStylesheetLink(result.secure_url);
    }).catch((err) => {
        console.log("Error");
    });
}

function jsTask() {
    displayMessage('Task - JavaScript', 'h1');
}



/* -----------------------------
        Parse Options
 -----------------------------*/

program
    .version('0.0.1')
    .option('--css', 'Styles')
    .option('--js', 'Scripts')
    .option('--all', 'All')
    .parse(process.argv);

if (program.css) cssTask()
if (program.js) jsTask()

if (program.all) {
    cssTask();
    jsTask();
}







