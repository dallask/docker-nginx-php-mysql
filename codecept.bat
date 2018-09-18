@echo off
@setlocal
@chcp 65001
set CODECEPT_PATH=C:/Users/Ievgen_Kyvgyla/AppData/Roaming/Composer/vendor/bin/
"%CODECEPT_PATH%codecept.bat" %*
@endlocal