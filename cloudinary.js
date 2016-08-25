const cloudinary = require('cloudinary');
const replace = require("replace");
const program = require('commander');

cloudinary.config({
    cloud_name: 'big-cabal',
    api_key: '122125953429187',
    api_secret: 'F0lC8UhoJaGnJGDufpTSSp5hdgw'
});


/* -----------------------------
    Tasks
 -----------------------------*/

function cssTask() {
    function updateStylesheetLink(newStylesheetLink) {
        const reg = /https:\/\/res\.cloudinary\.com(.*)css/;
        replace({
            regex: reg,
            replacement: newStylesheetLink,
            paths: ['header.php'],
            recursive: true,
            silent: true,
        });
    }
    const stylesheet = 'style.css';
    const options = {
        resource_type: 'raw',
        folder: 'zikoko-static-assets',
        public_id: 'zikoko-stylesheet-v1'
    };
    cloudinary.v2.uploader.upload(stylesheet, options, (error, result) = > {
        console.log(result);
        updateStylesheetLink(result.secure_url);
    });
}

function jsTask() {
    console.log("js")
}



/* -----------------------------
        Parse Options
 -----------------------------*/

program
    .version('0.0.1')
    .option('--css', 'Styles')
    .option('--js', 'Scripts')
    .parse(process.argv);

if (program.css) cssTask()
if (program.js) jsTask()







