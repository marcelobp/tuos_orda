# config valid only for current version of Capistrano
lock '3.6.1'

set :application, 'figshare_orda'
set :repo_url, 'git@src.shef.ac.uk:cs1mbp/figshare_orda.git'

set :ssh_options, {
  keys: %{/etc/deploy-keys/jenkins-deploy}
}

# Default branch is :master
# ask :branch, `git rev-parse --abbrev-ref HEAD`.chomp

# Default deploy_to directory is /var/www/my_app_name
# set :deploy_to, '/var/www/my_app_name'

# Default value for :scm is :git
# set :scm, :git

# Default value for :format is :airbrussh.
# set :format, :airbrussh

# You can configure the Airbrussh format using :format_options.
# These are the defaults.
# set :format_options, command_output: true, log_file: 'log/capistrano.log', color: :auto, truncate: :auto

# Default value for :pty is false
# set :pty, true

# Default value for :linked_files is []
# append :linked_files, 'config/database.yml', 'config/secrets.yml'

# Default value for linked_dirs is []
# append :linked_dirs, 'log', 'tmp/pids', 'tmp/cache', 'tmp/sockets', 'public/system'
append :linked_dirs, 'cache', 'log'

# Default value for default_env is {}
# set :default_env, { path: "/opt/ruby/bin:$PATH" }

# Default value for keep_releases is 5
# set :keep_releases, 5

namespace :deploy do

  task :run_composer do
    on roles(:app) do
      within(release_path) do
        execute :composer, :install
      end
    end
  end
  after :updated, :run_composer

  task :restart do
    on roles(:app) do
      sudo :monit, :restart, 'figshare-orda'
    end
  end
  after :published, :restart
end
