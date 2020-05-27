![CI](https://github.com/validformbuilder/playground/workflows/CI/badge.svg?branch=master)

# ValidForm Builder Playground
An easy to use playground to get your hands dirty with ValidForm Builder

## Installation

### Local usage
Clone the repository and run `composer install` from the project root. This will install all dependencies, 
trigger a `yarn install` and open your web browser once everything is done.

### Docker
If you have Docker for Desktop installed, you can pull the `validformbuilder/playground` image from the 
Docker Hub to immediately browse through all of the example code.

Just use `docker run --rm -p 8000:8000 --name vfb-playground validformbuilder/playground`

## Get started

Run `php -S localhost:8000 -t public/ && open http://localhost:8000` to get started. 
This will start a basic webserver on `localhost:8000`

## Requirements

### Local
You need to have `composer` and `yarn`* installed on your development machine.
On a Mac, this can be easily installed using [Homebrew](https://brew.sh): `brew install php@7.3 composer yarn`

### Docker
If you prefer using the docker image, make sure you have 
[Docker for Desktop](https://www.docker.com/products/docker-desktop) installed on your local machine.

### Resources:
 - [How to install Yarn](https://yarnpkg.com/en/docs/install)
 - [How to install composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
 
## Todo

- [X] Allow users to submit example forms and view results
- [X] Create a docker container for easy access to the playground
- [ ] Automate docker image builds
- [ ] Use front-end framework like bootstrap for nicer styling
- [ ] Implement something like https://github.com/Corveda/PHPSandbox to create a hosted version 
      of the ValidForm Builder Playground
