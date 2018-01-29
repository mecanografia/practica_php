# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|

  config.vm.box = "ubuntu/xenial64"

  # Load nginx
  config.vm.define "nginx" do |app|
    app.vm.hostname = "nginx"
    #app.vm.network "public_network"
    app.vm.network "private_network", ip: "192.168.33.10"
    app.vm.provision "shell", path: "provision/provision-for-nginx.sh"
  end
  # Load mysql
  config.vm.define "mysql" do |app|
    app.vm.hostname = "mysql"
    #app.vm.network "public_network"
    app.vm.network "private_network", ip: "192.168.33.11"
    app.vm.provision "shell", path: "provision/provision-for-mysql.sh"
  end
end
