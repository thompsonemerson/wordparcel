<p align="center">
  <img src="https://i.imgur.com/WK3jvq0.png">
</p>

## Getting started
Start to clone the project for your machine in the directory that will work.

```bash
# clone it:
$ git clone https://github.com/thompsonemerson/wordparcel.git

# open the project folder:
$ cd wordparcel
```

### Configuring WordPress
The command below will download and install the latest version of WordPress that will be launched at the url `http://localhost:1234`.

```bash
# use npm:
$ npm run wp:install

# or yarn:
$ yarn wp:install
```
> In this step, note that you will need to fill in the database information. normal WordPress installation process.


### Install dependencies
Install the necessary dependencies and start the development.

```bash
# use npm:
$ npm i

# or yarn:
$ yarn
```
> Ready!!! 🎉 <br> there should now be a directory called `wordparcel` that was automatically taken to the WordPress themes area (`wordpress/wp-content/themes`).

### Run project
Both commands will execute at the url `http://localhost:1234`.

#### Serve and watch

```bash
# use npm:
$ npm run dev

# or yarn:
$ yarn dev
```

#### Only serve
```bash
# use npm:
$ npm start

# or yarn:
$ yarn start
```

## Structure
```
├── scripts.sh
├── package.json
├── README.md
├── wordpress [created after wp:install]
├── plugins [to version WordPress plugins]
└── src
    ├── js
    │   ├── scripts.js [required]
    │   └── *.js
    │
    ├── images
    │   └── {.jpg, .png, .svg, .gif, .ico}
    │
    ├── scss
    │   ├── styles.scss [required]
    │   └── *.scss
    │
    ├── footer.php
    ├── functions.php
    ├── header.php
    ├── index.php
    └── style.css
```
> Note that in the structure only the `scripts.js` and `styles.scss` files are required for the bundler, and the wordpress folder is created automatically after the `wp:install` command.
