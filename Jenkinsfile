node{
    agent any

    import jenkins.model.*
    jenkins = Jenkins.instance

    def app

    environment {
        PATH = "C:\\Program Files\\Git\\usr\\bin;C:\\Program Files\\Git\\bin;${env.PATH}"

            stage('Prepare') {
                steps {
                    sh 'composer install'
                    sh 'vendor/bin/phpunit'
                }
            }
            stage('Build'){
                app = docker.build("test-image", "-f app1.dockerfile .").withRun('-p 8092:80')
            }

            stage('cleanup') {
                // Recursively delete all files and folders in the workspace
                // using the built-in pipeline command
                deleteDir()
            }

    }
}