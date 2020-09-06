<?php

use App\Enums\Gender;
use App\Enums\Job;
use App\Enums\Industory;
use App\Enums\Location;

return [
    Gender::class => [
        Gender::Male => '男性',
        Gender::Female => '女性',
        Gender::Other => 'その他',
    ],

    Job::class => [
        Job::Student => '小・中・高学生',
        Job::CollegeStudent => '大学生',
        Job::Employee => '会社員',
        Job::CivilServant => '公務員',
        Job::SelfEmplayed => '自営業',
        Job::Freelance => 'フリーランス',
        Job::Housework => '専業主婦(夫)',
        Job::Unemployed => '無職',
        Job::Other => 'その他',
    ],

    Industory::class => [
        Industory::Sales => '営業職',
        Industory::Accounting => '経理',
        Industory::PlanningAndManagement => '企画・管理',
        Industory::OfficeAssistant => '事務・アシスタント',
        Industory::Service => 'サービス職',
        Industory::Consultants => 'コンサルタント',
        Industory::Financial => '金融系専門職',
        Industory::Teacher => '教員',
        Industory::AgricultureOrFisheries => '農林水産関連職',
        Industory::TechnicalJob => '技術職',
        Industory::MedicalProfessional => '医療系専門職',
        Industory::Enginner => 'エンジニア職',
        Industory::Designer => 'デザイナー職',
        Industory::Other => 'その他',
    ],

    Location::class => [
        Location::Nago => '名護市',
        Location::Kunigami => '国頭郡',
        Location::Yomitan => '読谷村',
        Location::Kadena => '嘉手納町',
        Location::Uruma => 'うるま市',
        Location::Chatan => '北谷町',
        Location::Ginowan => '宜野湾市',
        Location::Kitanakagusuku => '北中城村',
        Location::Nakagusuku => '中城村',
        Location::Nishihara => '西原町',
        Location::Urasoe => '浦添市',
        Location::Naha => '那覇市',
        Location::Haebaru => '南風原町',
        Location::Shimajiri => '島尻郡',
        Location::Nanjo => '南城市',
        Location::Tomigusuku => '豊見城市',
        Location::Itoman => '糸満市',
        Location::Yaeyama => '八重山諸島',
        Location::PrefOther => '県内その他',
        Location::Other => '県外',
        Location::Abord => '海外',
    ],
];
