node{

    def app

    environment {
        PATH = "C:\\Program Files\\Git\\usr\\bin;C:\\Program Files\\Git\\bin;${env.PATH}"

            stage('Prepare') {
                    sh 'composer install'
                    sh 'vendor/bin/phpunit'

            }
            stage('Build'){
                app = docker.build("test-image", "-f app1.dockerfile .").withRun('-p 8092:80')
            }

    }
}