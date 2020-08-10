<h1>Directory Setup</h1>
<p>This is where all your paths to project directories will be setup in your project. Again because Fat-Free is so flexible, you can make it whatever you'd like.</p>
<form method="POST" action="/init-environment/update">
	<input type="hidden" name="next_page" value="choose-database">
	<div class="form-group">
		<label for="controller">Config Directory</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><?= ($PROJECT_BASE_DIR) ?></span>
			</div>
			<input type="text" class="form-control" id="config" name="config" value="<?= ($config['config'] ?: 'app/config/') ?>" required>
		</div>
		<small class="form-text text-muted">This is where you config files for database connections, routes, and other things will be setup.</small>
	</div>
	<div class="form-group">
		<label for="controller">Controller Directory</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><?= ($PROJECT_BASE_DIR) ?></span>
			</div>
			<input type="text" class="form-control" id="controller" name="controller" value="<?= ($config['controller'] ?: 'app/controller/') ?>" required>
		</div>
		<small class="form-text text-muted">Controllers are the "directors" of your web app. They handle requests from your users and process them.</small>
	</div>
	<div class="form-group">
		<label for="task">Task Directory</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><?= ($PROJECT_BASE_DIR) ?></span>
			</div>
			<input type="text" class="form-control" id="task" name="task" value="<?= ($config['task'] ?: 'app/task/') ?>" required>
		</div>
		<small class="form-text text-muted">Controllers are the "directors" of your web app. They handle requests from your users and process them.</small>
	</div>
	<div class="form-group">
		<label for="controller">Model Directory</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><?= ($PROJECT_BASE_DIR) ?></span>
			</div>
			<input type="text" class="form-control" id="model" name="model" value="<?= ($config['model'] ?: 'app/model/') ?>" required>
		</div>
		<small class="form-text text-muted">A model basically represents a table in your database. It makes it very easy to add, modify, or delete new rows from your tables.</small>
	</div>
	<div class="form-group">
		<label for="controller">UI Directory</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><?= ($PROJECT_BASE_DIR) ?></span>
			</div>
			<input type="text" class="form-control" id="ui" name="ui" value="<?= ($config['ui'] ?: 'app/ui/') ?>" required>
		</div>
		<small class="form-text text-muted">These are where all your HTML and template files will be stored.</small>
	</div>
	<div class="form-group">
		<label for="controller">Public Directory</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><?= ($PROJECT_BASE_DIR) ?></span>
			</div>
			<input type="text" class="form-control" id="public" name="public" value="<?= ($config['public'] ?: 'app/public/') ?>" required>
		</div>
		<small class="form-text text-muted">This is the directory from where Apache/Nginx/Lighttpd etc will serve your content. It should only have 1 PHP file (index.php) and have your images, JavaScript, and CSS files as well.</small>
	</div>
	<div class="form-group">
		<label for="controller">Bin Directory</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><?= ($PROJECT_BASE_DIR) ?></span>
			</div>
			<input type="text" class="form-control" id="bin" name="bin" value="<?= ($config['bin'] ?: 'app/bin/') ?>" required>
		</div>
		<small class="form-text text-muted">Several executable files will be placed here to help with fleshing out your project better (test for unit tests, and cli for CLI scripts/crons).</small>
	</div>
	<div class="form-group">
		<label for="controller">Utils Directory</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><?= ($PROJECT_BASE_DIR) ?></span>
			</div>
			<input type="text" class="form-control" id="utils" name="utils" value="<?= ($config['utils'] ?: 'app/utils/') ?>" required>
		</div>
		<small class="form-text text-muted">This folder will hold any random classes you may have that help you with your project that you need to custom design (such as a custom email class to send emails, or a special way to format text, etc).</small>
	</div>
	<div class="form-group">
		<label for="controller">Log Directory</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><?= ($PROJECT_BASE_DIR) ?></span>
			</div>
			<input type="text" class="form-control" id="log" name="log" value="<?= ($config['log'] ?: 'app/log/') ?>" required>
		</div>
		<small class="form-text text-muted">All your log files will be saved here.</small>
	</div>
	<div class="form-group">
		<label for="controller">Temp Directory</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><?= ($PROJECT_BASE_DIR) ?></span>
			</div>
			<input type="text" class="form-control" id="temp" name="temp" value="<?= ($config['temp'] ?: 'app/temp/') ?>" required>
		</div>
		<small class="form-text text-muted">These are usually cached files from Fat-Free.</small>
	</div>
	<div class="form-group">
		<label for="controller">Composer Vendor Directory</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><?= ($PROJECT_BASE_DIR) ?></span>
			</div>
			<input type="text" class="form-control" id="composer" name="composer" value="<?= ($config['composer'] ?: 'vendor/') ?>" required>
		</div>
		<small class="form-text text-muted">This is where Composer installs packages.</small>
	</div>
	<a href="/init-environment/title" type="submit" class="btn btn-primary mb-5">Back</a>
	<button type="submit" class="btn btn-primary mb-5">Next</button>
</form>