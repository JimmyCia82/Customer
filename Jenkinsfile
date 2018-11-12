pipeline{
    agent any
    options {
        timeout(time: 1, unit: 'HOURS')
    }
        stages{
            stage('Prepare') {

                steps{
                    withEnv(PATH = "C:\\Program Files\\Git\\usr\\bin;C:\\Program Files\\Git\\bin;${env.PATH}") {
                        sh 'composer install'
                        sh 'vendor/bin/phpunit'
                    }
                }
            }
            stage('Build'){
                steps{
                    echo 'Hello World'
                    //app = docker.build("test-image", "-f app1.dockerfile .").withRun('-p 8092:80')
                }
            }
        }

}