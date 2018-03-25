# test-travis-ci

This is a sample project demonstrating how you can set up Travis CI and execute unit tests automatically.

See additional details about Travis CI setup here: https://docs.travis-ci.com/user/getting-started/

## Initial Setup Steps

If you do not already have a Travis CI account, you can sign up for one here: https://travis-ci.org

Once you have created an account your repositories should sync to your account. In order to enable your repo for Travis CI you need to enable it in this UI by clicking the X box. That's about all you need to do on the Travis CI side of things.

## .travis.yml

The .travis.yml file is the script you add to your project to define all Travis CI behaviors. For the scope of this example I am defining that this is a PHP project, which PHP versions to test against, anything that needs to be run before my script, and then defining scripts to execute (in this case phpunit tests).

You can see the .travis.yml file in the project [here](.travis.yml)

You can find all the build options here: https://docs.travis-ci.com/user/customizing-the-build

## Adding phpunit config

In order to run phpunit as a generic command without any arguments, you can define a phpunit.xml file. This file has a number of configuration options, but for this basic example I have simply told it where to locate my test files.

You can see the full phpunit.xml [here](phpunit.xml)

## Conclusion

With test simple steps: enabling the repo, defining a .travis.yml config, and defining a phpunit.xml file we have very simply set up our project to automatically perform unit tests on commit.
