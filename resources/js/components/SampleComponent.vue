<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">
                        <button class="btn btn-primary"> {{ langObj.get('actions.add') }}</button>
                        <button class="btn btn-primary"> {{ getLang('actions.add') }}</button>
                        <button class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import Lang from 'lang.js';
    export default {
        mounted() {
            this.langObj = new Lang();

            var messages = require('../message.json');
            this.langObj.setMessages(messages);
        },
        data() {
            return {
                //add: Lang.get('actions.add')
                langObj: ''
            }
        },
        methods: {
            getLang(ndx) {
                return this.langObj.get(ndx);
            }
        }
    }
</script>