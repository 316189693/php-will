@for /r . %%a in (.) do @if exist "%%a/.git" rd /s /q "%%a/.git"
 @echo 已经全部删除 
@pause