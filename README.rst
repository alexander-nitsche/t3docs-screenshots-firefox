===================================
Screenshots with Selenium + Firefox
===================================

This project provides a way to take screenshots of HTML files in a scripted way.

.. contents:: Table of Contents


Prerequisites
=============

Install

1.  `Docker <https://docs.docker.com/get-docker/>`_
2.  `Docker-Compose <https://docs.docker.com/compose/install/>`_
3.  `DDEV <https://ddev.readthedocs.io/en/stable/>`_


Installation
============

1. Checkout the project and switch to its folder

   .. code-block:: bash

      git clone https://github.com/alexander-nitsche/t3docs-screenshots-firefox.git
      cd t3docs-screenshots-firefox

2. Build and start the environment by

   .. code-block:: bash

      ddev start

3. Install the composer packages

   .. code-block:: bash

      ddev composer install

4. Test the installation by creating a first screenshot ``scrollbars.png`` by

   .. code-block:: bash

      ddev exec php scrollbars.php

Now you are ready to create further scripts which take screenshots with the support of the ``php-webdriver/webdriver``
package, Selenium and Firefox.


Uninstallation
==============

1. Remove the ddev registration by

   .. code-block:: bash

      ddev delete -Oy t3docs-screenshots-firefox

2. Delete the project folder.