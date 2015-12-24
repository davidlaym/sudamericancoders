# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  config.vm.box = "scotch/box"

  config.vm.hostname = "sudamericancoders.dev"
  config.vm.network :private_network, ip: "192.168.33.10"
  config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=666"]
  
  config.hostsupdater.aliases = %w{sudamericancoders.dev}
  config.hostsupdater.remove_on_suspend = true

  # Fix for slow external network connections
    config.vm.provider :virtualbox do |vb|
      vb.memory = 2048
      vb.customize ['modifyvm', :id, '--natdnshostresolver1', 'on']
      vb.customize ['modifyvm', :id, '--natdnsproxy1', 'on']
    end
  config.vm.provision :shell, :path => "sh/provision.sh"
end
