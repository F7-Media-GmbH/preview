..  include:: /Includes.rst.txt

..  _installation:

============
Installation
============

The extension currently supports TYPO3 v13.

Composer
--------

The installation via composer is recommended.

..  code-block:: bash

    composer require f7media/preview


TYPO3 Extension Repository
--------------------------

For non-composer projects, the extension is available in TER as extension key ``preview`` and can be installed using
the extension manager.

Update the database scheme
--------------------------

Open your TYPO3 backend with :ref:`system maintainer <t3start:system-maintainer>`
permissions.

In the module menu to the left navigate to :guilabel:`Admin Tools > Maintanance`,
then click on :guilabel:`Analyze database` and create all.

See also :ref:`Run the database analyser <t3upgrade:run_the_database_analyser>`

Configuration
--------------------------

The preview links are valid for 7 days by default and are then automatically deleted.
The validity period in days can be adjusted under Settings -> Extensions -> Preview.
