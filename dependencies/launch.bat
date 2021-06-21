:: Start PHPWrapper (in another window)
pushd ..\phpwrapper
echo:
echo Starting PHPWrapper...
echo:
call ..\dependencies\php\php.exe -S 127.0.0.1:6596
echo:
popd
echo PHP has been closed.
goto end