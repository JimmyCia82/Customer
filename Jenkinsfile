node{
    agent any

    def app

    environment {
        PATH = "C:\\Program Files\\Git\\usr\\bin;C:\\Program Files\\Git\\bin;${env.PATH}"

        stages {
            slackSend color: '#4CAF50', channel: '#devops', message: "Started ${env.JOB_NAME} (<${env.BUILD_URL}|build ${env.BUILD_NUMBER}>)"
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
}