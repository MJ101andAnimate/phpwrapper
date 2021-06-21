:: Starts up PHPWrapper
:: Author: octanuary#6596
:: License: GPLv3
set PWRAP_VER=0.1.1
title PHPWrapper v%PWRAP_VER%

:: Initialize (stop command spam, clean screen, make variables work, set to UTF-8)
@echo off && cls
SETLOCAL ENABLEDELAYEDEXPANSION
chcp 65001 >nul

:: Move to base folder, and make sure it worked
pushd "%~dp0"
if not exist dependencies ( goto starting_error )
if not exist phpwrapper ( goto starting_error )
goto no_start_error
:starting_error
echo It doesn't seem like this script is in the main PHPWrapper folder.
goto end
:no_start_error

:: Option
echo:
echo Enter 1 to start with options
echo Enter 2 to start without options
echo Enter 0 to exit
echo:
:reask_a
set /p OPTION= What would you like to do? 
if !OPTION!==1 ( goto launch )
if !OPTION!==2 ( goto launch_no_option )
if !OPTION!==0 ( goto end )
echo You have not chosen a valid option.
goto reask_a


:launch_no_option
:: Launch ungoogled-chromium
title PHPWrapper v!PWRAP_VER! [Starting...]
echo:
echo PHPWrapper v!PWRAP_VER! is starting...
echo A project from Octanuary
echo:
echo Launching ungoogled-chromium...
pushd dependencies\ungoogled-chromium
start chromium.exe --user-data-dir=the_profile --app=http://localhost:6596 --allow-outdated-plugins
popd

:: Start PHPWrapper
pushd phpwrapper
echo:
echo Starting PHPWrapper...
echo:
call ..\dependencies\php\php.exe -S 127.0.0.1:6596
echo:
popd
echo PHP has been closed.
goto end


:: Launch ungoogled-chromium
:launch
title PHPWrapper v!PWRAP_VER! [Starting...]
echo:
echo PHPWrapper v!PWRAP_VER! is starting...
echo A project from Octanuary
echo:
echo Launching ungoogled-chromium...
pushd dependencies\ungoogled-chromium
start chromium.exe --user-data-dir=the_profile --app=http://localhost:6596 --allow-outdated-plugins
popd

:: Launch PHPWrapper in separate window
pushd dependencies
start /MIN launch.bat
popd

:::::::::::::
:: Options ::
:::::::::::::

title PHPWrapper v!PWRAP_VER!
:cls
cls
echo:
echo Enter 1 to relaunch ungoogled-chromium
echo Enter cls to clear the screen
echo Enter 0 to exit
echo:
:reask_b
set /p OPTION= What would you like to do? 
if "!OPTION!"=="1" goto reopen_chromium
if /i "!OPTION!"=="cls" goto cls
if "!OPTION!"=="0" goto end
echo You have not chosen a valid option.
goto reask_b


:reopen_chromium
:: Launch ungoogled-chromium
echo:
echo PHPWrapper v!PWRAP_VER! is starting...
echo A project from Octanuary
echo:
echo Launching ungoogled-chromium...
pushd dependencies\ungoogled-chromium
start chromium.exe --user-data-dir=the_profile --allow-outdated-plugins
popd
echo Chromium has been opened.
goto reask_b

:end
echo Closing script...
pause & exit
