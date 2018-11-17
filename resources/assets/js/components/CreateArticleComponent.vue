<template>
    <div class="col-12">
        <form-group><label for="metatitle">Метазаголовок</label>
            <input type="text" id="metatitle" v-model="metatitle" class="form-control">
            <small></small>
        </form-group>
        <form-group><label for="metakey">Метаключи</label>
            <input type="text" id="metakey" v-model="metakey" class="form-control">
            <small></small>
        </form-group>
        <form-group><label for="metadescription">Метаописание</label>
            <input type="text" id="metadescription" v-model="metadescription" class="form-control">
            <small></small>
        </form-group>
        <form-group><label for="title">Заголовок статьи</label>
            <input type="text" id="title" v-model="title" class="form-control">
            <small></small>
        </form-group>
        <form-group><label for="anons">Анонс</label>
            <input type="text" id="anons" v-model="anons" class="form-control">
            <small></small>
        </form-group>
        <form-group>
            <label for="description">Текст статьи</label>
            <textarea type="text" id="description" v-model="description" class="form-control"></textarea>
            <small></small>
        </form-group>
        <form-group>
            <label for="img">Изображение для статьи</label>
            <input type="file" id="img" v-on:change="img" class="form-control-file">
            <small></small>
        </form-group>
        <form-group>
            <label for="alt">Текст замещающий изображение</label>
            <input type="text" id="alt" v-model="alt" class="form-control">
            <small></small>
        </form-group>
        <form-group>
            <label for="img_title">Заголовок изображения</label>
            <input type="text" id="img_title" v-model="img_title" class="form-control">
            <small></small>
        </form-group>

        <form-group>
            <button type="button" class="btn btn-primary" @click="storeArticle">Сохранить</button>
        </form-group>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "CreateArticleComponent",
        props: ['user_id'],
        data(){
            return{
                user_id: this.user_id,
                metatitle: '',
                metakey: '',
                metadescription: '',
                title: '',
                anons: '',
                description: '',
                img: '',
                alt: '',
                img_title: ''
            }
        },
        methods:{
            storeArticle(){
                axios.post('/dashboard/article', {
                    metatitle: this.metatitle,
                    metakey: this.metakey,
                    metadescription: this.metadescription,
                    title: this.title,
                    anons: this.anons,
                    description: this.description,
                    img: this.img,
                    alt: this.alt,
                    img_title: this.img_title,
                    user_id: this.user_id
                }).then(response => {
                    console.log(response.data);
                });
            }
        }
    }
</script>

<style scoped>

</style>
