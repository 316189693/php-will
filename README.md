1. 使用 git pre-commit 钩子完成diamagnetic风格规范
   在 Git 中，"pre-commit" 是一个钩子脚本，用于在提交代码之前执行一些自定义的操作。这些操作可以包括代码格式化、静态分析、测试等，以确保提交的代码满足一定的标准。通常情况下，"pre-commit" 钩子用于阻止不符合要求的代码提交。

如果你想在 "pre-commit" 钩子中执行一些操作并阻止提交，可以按照以下步骤操作：

1. 在你的 Git 仓库中，进入 `.git/hooks` 目录。这个目录包含了各种 Git 钩子的样本文件。

2. 复制或重命名 `pre-commit.sample` 文件为 `pre-commit`（确保没有 `.sample` 扩展名）：
   ```sh
   cp pre-commit.sample pre-commit
   ```

3. 编辑 `pre-commit` 文件，添加你希望在提交前执行的操作。这可以包括代码格式化、静态分析、测试等。

4. 在 `pre-commit` 文件的最后，如果执行失败则可以使用 `exit 1` 命令来阻止提交。例如：
   ```sh
#!/bin/sh

./vendor/bin/phpcs --standard=.phpcs.xml --encoding=utf-8 --extensions=php app/ config/ database/  routes/

# 如果 CodeSniffer 返回非零退出码（即检查不通过），阻止提交
if [ $? -ne 0 ]; then
echo "Code style check failed. Please fix the issues before committing."
exit 1
fi

   ```

5. 保存并关闭 `pre-commit` 文件。

6. 确保 `pre-commit` 文件具有可执行权限。如果没有，可以使用以下命令赋予执行权限：
   ```sh
   chmod +x pre-commit
   ```

现在，当你执行 `git commit` 操作时，Git 会自动运行 "pre-commit" 钩子中定义的操作。如果操作失败，提交将被阻止，直到问题得到修复。

请注意，使用 "pre-commit" 钩子可以帮助你确保提交的代码满足特定的标准，但在实际操作中，你可能需要根据你的项目和团队需求进行适当的配置和调整。
