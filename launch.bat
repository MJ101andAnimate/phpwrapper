:: Starts up PHPWrapper
:: Author: octanuary#6596
:: License: GPLv3
set PWRAP_VER=0.1.0
title PHPWrapper v!PWRAP_VER! [Initializing...]

:: Initialize (stop command spam, clean screen, make variables work, set to UTF-8)
@echo off && cls
SETLOCAL ENABLEDELAYEDEXPANSION
chcp 65001 >nul

:: Move to base folder, and make sure it worked
pushd "%~dp0"
if not exist utilities ( goto starting_error )
if not exist wrapper ( goto starting_error )
goto no_start_error
:starting_error
echo It doesn't seem like this script is in the main PHPWrapper folder.
goto end
:no_start_error

:: Launch ungoogled-chromium
title PHPWrapper v!PWRAP_VER! [Starting...]
echo:
echo PHPWrapper v!PWRAP_VER! is starting...
echo A project from Octanuary
echo:
echo Launching ungoogled-chromium...
pushd utilities\ungoogled-chromium
start chromium.exe --user-data-dir=the_profile --app=http://localhost:6596 --allow-outdated-plugins
popd

:: Start PHPWrapper
pushd wrapper
echo:
echo Starting PHPWrapper...
echo:
call ..\utilities\php\php.exe -S 127.0.0.1:6596
echo:
pause & exit

:end
echo Closing script...
exit