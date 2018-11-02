pipeline{
    agent any

    environment {
        PATH = "C:\\Program Files\\Git\\usr\\bin;C:\\Program Files\\Git\\bin;${env.PATH}"

        stages{
            stage('Prepare') {
                    sh 'composer install'
                    sh 'vendor/bin/phpunit'
            }
            stage('Build'){
                def app
                app = docker.build("test-image", "-f app1.dockerfile .").withRun('-p 8092:80')
            }
        }
    }
}