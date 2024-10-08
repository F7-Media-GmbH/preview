..  include:: /Includes.rst.txt

..  _introduction:

============
Introduction
============

This extension enables the provision of preview links for people who do not have a backend account. By using the preview link,
hidden or not yet published pages can be viewed in advance in the frontend, e.g. to coordinate with external partners.

Handle with care
=======================

Anyone in possession of the preview link can view the corresponding page; it is therefore not suitable per se
for high-security information.

Motivation and Use case
=======================

Pages are often prepared and coordinated with external partners, e.g. approvals for graphics or texts are obtained.
These correction and coordination loops are greatly simplified by this extension.

Editors can simply generate a preview link and pass it on to the external partner. After the configurable validity
period (default 7 days), the preview link is automatically deleted again and thus loses its validity. Of course,
the editor can also remove the preview link in advance if it is no longer required.

In this way, access to pages that are deactivated or only published at a later date can easily be made available
to a group of people who should not receive a TYPO3 backend account.

Features
========

*   Generate preview links for pages which are not publicly accessible yet
*   Automatically remove preview links after a configurable time period
*   Works out of the box for every page not visible in the frontend (takes `hidden`, `starttime`, `endtime` into account)

Other solutions
=======================

There is never only one way to solve things in the TYPO3 universe. TYPO3 workspaces also provides a concept of preview things. But it's
much more complex to handle and from our point of view it fits another use case. If you evaluating solutions, you might want to take a
look at it, and choose whatever fits your needs best.

