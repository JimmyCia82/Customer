pipeline{
    agent any

        stages{
            stage('Prepare') {

                steps{
                    sh 'composer install'
                    sh 'vendor/bin/phpunit'
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