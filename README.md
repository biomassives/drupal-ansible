drupal-ansible
==============

An Ansible playbook for a Drupal installation on Ubuntu.


Add new task:

    $ mkdir -p roles/TASK_NAME/{tasks,handlers,templates,files,vars}
    $ touch roles/TASK_NAME/tasks/main.yml

To run:

    $ ansible-playbook -i stage bootstrap.yml -K
