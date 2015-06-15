# dataFx - formerly Datawrapper

## Fairfax Datawrapper (fork)
Currently two simultanious versions are in this repo.

## dataFx Wiki
https://bitbucket.org/fairfax/datafx/wiki/browse/

## dataFx bugtracker
https://bitbucket.org/fairfax/datafx/issues?status=new&status=open

### Branches and remotes
Starting 15 June 2015, a one month sprint of evaluation development cycle to establish the viability of datawrapper as a long-term data / charting solution for specific tasks. See https://drive.google.com/open?id=1J4DUQCrJDhNUBSYgVcdBBYet7eIMAYeYZ3fqLSdghUw&authuser=0 for initial PRD.

Since the initial fork, datawrapper 1.9.5 has been released on github. 
For accurate evaluation, this latest (as of 15 June 2015) release will also be fetched.

Due to this change, the local dev environment is now mapped to the following remotes:

- "fork: git@github.com:datafunk/datawrapper.git (was origin for v1.9.3) __ DO NOT PUSH TO THIS REMOTE UNLESS YOU INTEND TO CREATE A PULL REQUEST TO THE OFFICIAL DATAWRAPPER REPO! __
- "datafx": git@bitbucket.org:fairfax/datafx.git (renamed repo of datawrapper, this is the repo to contribute to)
- "upstream": git@github.com:datawrapper/datawrapper.git (new remote added to fetch v1.9.5)

__dev__ branch, as of 3b926dc is v1.9.3, which is internally modified fork of the branch _fork_ (from git@github.com:datafunk/datawrapper.git), however this was not identical to the live datawrapper.de install and was not readily functional - see sommit history and issues for details.

__fork__ is _origin_ of the _dev_ branch above

__upstream__ is the direct connection to the official datawrapper repo

### Contacts

This repo is maintained by [Marc Moncrief](mmoncrief@fairfaxmedia.com.au) and [Peter Borbely](pborbely@fairfaxmedia.com.au) 








# Original datawrapper repo README
## About datawrapper.de

Datawrapper is a tool that enables anyone to create visualizations in seconds, without any programming skills.

It draws inspiration from [ManyEyes](http://www-958.ibm.com/software/data/cognos/manyeyes/) and [GoogleCharts](https://developers.google.com/chart/) but remains entirely open-source and independent from a third-party server.

It was created by [Mirko Lorenz](http://www.mirkolorenz.com/), [Nicolas Kayser-Bril](http://nkb.fr) and [Gregor Aisch](http://driven-by-data.net/) and was funded by [ABZV](http://www.abzv.de/).

* Live service: <http://datawrapper.de/>
* Documentation: <http://docs.datawrapper.de/> ([Install](https://github.com/datawrapper/datawrapper/wiki/Installing-Datawrapper))

## Contact

* IRC: #datawrapper on [freenode.net](https://webchat.freenode.net/)
* Twitter: [@datawrapper](http://twitter.com/datawrapper)
* Blog: [blog.datawrapper.de](http://blog.datawrapper.de)

## Translators

* French - [Anne-Lise Bouyer](https://crowdin.net/profile/annelise)
* Spanish - [Miguel Paz](https://github.com/miguelpaz)
* Italian - [Alessio Cimarelli](https://crowdin.net/profile/jenkin), [nelsonmau](https://crowdin.net/profile/nelsonmau)
* Chinese - [CUI Anyong](https://github.com/xiaoyongzi)
* Portuguese - [Rubens Fernando](https://crowdin.net/profile/rubensfernando)

If you want to contribute translations, contact us via [Crowdin.net](https://crowdin.net/project/datawrapper).
